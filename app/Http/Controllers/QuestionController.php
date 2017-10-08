<?php

namespace App\Http\Controllers;
use App\QuestionStatusModel;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use DB;
use Storage;
use Response;
use Session;
use App\AcceptQuestion;
use App\AssignQuestion;
use App\CreditCardDetails;
use App\Transaction;
use App\User;
use App\PostcommentModel;
use App\MakePaymentModel;
use App\DateTimeModel;
use App\PostAnswer;
use App\PostQuestionModel;
use App\PostQuestionPrice;
use App\SuggestDeadline;
use App\SuggestPriceIncrease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Auth;

class QuestionController extends AdminController
{
    /*
     * Suggest Price Increase here
     * The real course the price
     */

    public function PayRequests(Request $request){

        $request_id = Input::get('checkbox');

        if(is_array($request_id)) {
            foreach ($request_id as $request => $val) {
                DB::table('payment_requests')->where('request_id', $val)
                    ->update(
                        [
                            'status' => 'paid',
                            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                        ]
                    );
            }
        }

        return redirect()->route('adm-tut-payments');
    }
    
    public function PostPaymentRequest(Request $request, $amount){
        
        $request_id = str_random(12);
        
        $user_id = Auth::user()->email;
        
        DB::table('payment_requests')->insert(
            [              
                'user_id' => Auth::user()->email,
                'amount' => $amount,
                'request_id' => $request_id,
                'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);

        $questions = Session::get('questions');

        foreach($questions as $comm => $val){
            DB::table('post_question_prices')->where('question_id', $val)
                ->update(
                    [
                        'paid' => 1,
                        'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                    ]
                );

        }

            return redirect()->route('tut-profile', ['email'=>$user_id]);
    }

    public function suggestPricePrice(Request $request, $question)
    {
        $quest = new SuggestPriceIncrease;

        /*
         * Get the question ID
         * Insert using Eloquent
         * Get question ID
         */

        $quest->question_id = $question;

        /*
         * Getcomments bodyformthe post
         * create the post date
         */

        $quest->suggested_price = $request->input('suggested_price');

        /*
         * Getcomments bodyformthe post
         * create the post date
         */

        $quest->user_id = Auth::user()->email;
        $quest->save();

        return redirect()->route('question.det', ['question_id'=> $question]);
    }
    
    /*
     * file download from the view 
     * $qeustion is the question iD
     * File name is the passed file name
     * $type can be questron or answer folder
     */
    
    public function downloads($question, $fileName, $type){
        
            $path = public_path().'/storage/uploads/'.$question.'/'.$type.'/'.$fileName;   

            return Response::download($path);
    }

    /*
     * comments files download
     */

    public function CommentFilesDownload($question, $fileName, $comment_id){

        $path = public_path().'/storage/uploads/'.$question.'/comments/'.$comment_id.'/'.$fileName;

        return Response::download($path);
    }


    public static function CommentFiles($comment_id, $question_id){


        $path_comm = public_path().'/storage/uploads/'.$question_id.'/comments/'.$comment_id;

        $manuals = [];

        $filesInFolder = \File::files($path_comm);



        foreach($filesInFolder as $path)
        {
            $manuals [] = pathinfo($path);
        }


        return $manuals;

    }

    /*
     * get question details
     */
    public function QuestionDetails($question_id, $optional=null){
        $email = Auth::user()->email;

        $details = $this->findTutorprofile($email, $optional);


        $sum = $details['sum'];

        $sum_2 = $details['sum2'];

        $comments12 = $details['comments'];

        $count=  $details['count'];


        $question_price= PostQuestionPrice::where('question_id',$question_id)->firstOrFail();

        
        $question = PostQuestionModel::where('question_id', $question_id)->firstOrFail();
        /*
         * Pull question price in this model quesry
         *
         */
    
        $assigned = DB::table('question_status_models')->where('question_id',$question_id)->first();     
          
        $time = new DateTimeModel();

        /*
        * return the comments in the following
        *
        */

        $interval = $time ->getDeadlineInSeconds($question_id);

        /*
         * return the comments in the following
         *
         */
        if(
        empty(
        $comments= PostQuestionModel::where('question_id', $question_id)->first()
        )

        )
        {
            $comments = [];
        }
        else{

            $comments = DB::table('post_comments')
                ->where('question_id', $question_id)
                ->where('message_type', 'Comment')
                ->get();
        }

        if(
        empty(
        $priceSuggestion= SuggestPriceIncrease::where('question_id', '=', $question_id)->first()
        )

        )
        {
            $priceSuggestion= array();
        }
        else{

            $priceSuggestion = DB::table('suggest_price_increases')->where('question_id', '=', $question_id) ->get();
        }
        /*
       * Get Sugegsted deadline
       */

        if(
        empty(
        $deadlines= SuggestDeadline::where('question_id', '=', $question_id)->get()
        )

        )
        {
            $deadlines= array();
        }
        else{

            $deadlines = DB::table('suggest_deadlines')->where('question_id', '=', $question_id) ->get();
        }
        

        $posted= DB::table('question_bodies')->where('question_id', '=', $question_id)->value('created_at');
        

            $user12 = Auth::User()->email;

            $user = DB::table('users')->where('email', '=', $user12) ->get();

            /**
             * Question files generator
             */
            
            $path_question = public_path().'/storage/uploads/'.$question_id.'/question/';
                                

            $manuals = [];
         
            $filesInFolder = \File::files($path_question);

            foreach($filesInFolder as $path)
            {
                $manuals[] = pathinfo($path);
            }

        /**
         * Answer files generator
         */
        $path_ans = public_path().'/storage/uploads/'.$question_id.'/answer/';


        $manuals_ans = [];

        $filesInFolder_ans = \File::files($path_ans);

        foreach($filesInFolder_ans as $path)
        {
            $manuals_ans[] = pathinfo($path);
        }


        return view ('quest.question-det12', [

            /*
             * Get user type here
             */
            'user' =>$user,
            
            /*
             * Return Comments
             */
            
            'comments' => $comments,

            /*
             * Get Question
             */

            'question' => $question,
            
            /*
             * Files and more file details 
             */
            
            'files'=>$manuals,

            /*
             * Assigned is assigned
             */

            'assigned'=>$assigned,


            'sum' => $sum,


            'sum_2' => $sum_2,


            'question_price' => $question_price,
            /*
             * Pass comments all of them
             */

            'price1' => $priceSuggestion,

            /*
             * pass suggested deadline to the view
             */

            'deadlines' => $deadlines,

            'difference' => $interval,

            'price' => $question_price->question_price,

           'posted' => $posted,

            'answer_files' => $manuals_ans,

            'comments21' => $comments12,

            'count' => $count

        ]);
    }
    

    public function UpdateQuestionStatus(Request $request, $question)
    {
        /*
         * Post answer here 
         */

        if($request->update =='cancel'){
            DB::table('question_matrices')->where('question_id', $question)
                ->update(
                    [
                        'cancelled' => 1,
                        'reassigned' => 0,
                        'completed' => 0,
                        'rated' => 0,
                        'paid' => 0,
                        'revision' => 0,
                        'answered' => 0,
                        'assigned' => 0,
                        'current' => 0,
                        'paid' => 0,
                        'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                    ]
                );

            /**
             * Add Cancel Question message here
             * Make price of cancelling be zero
             */
        }

        if($request->update =='revision'){
            /**
             * Post to assigned matrix
             */
            DB::table('question_matrices')->where('question_id', $question)
                ->update(
                    [
                        'cancelled' => 0,
                        'reassigned' => 0,
                        'completed' => 0,
                        'rated' => 0,
                        'paid' => 0,
                        'revision' => 1,
                        'answered' => 0,
                        'assigned' => 1,
                        'current' => 0,
                        'paid' => 0,
                        'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                    ]
                );

            /**
             * insert the history of the ratings
             */

            DB::table('question_histories')->insert(
                [

                    'user_id' => Auth::user()->email,
                    'question_id' => $question,
                    'status' => 'Revision',
                    'moderator' => 'Jeremy',
                    'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ]);
        }

        /**
         * Completed Questions
         */
        if($request->update =='completed'){

            /**
             * Post to assigned matrix
             */
            DB::table('question_matrices')->where('question_id', $question)
                ->update(
                    [
                        'cancelled' => 0,
                        'reassigned' => 0,
                        'completed' => 1, //accepted
                        'rated' => 1,
                        'paid' => 0,
                        'revision' => 0,
                        'answered' => 1,
                        'assigned' => 1,
                        'current' => 0,
                        'paid' => 0,
                        'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                    ]
                );

            /**
             * insert the history of the ratings
             */

            DB::table('question_histories')->insert(
                [

                    'user_id' => Auth::user()->email,
                    'question_id' => $question,
                    'status' => 'Completed',
                    'moderator' => 'Jeremy',
                    'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ]);

        }

        /**
         * Completed Questions
         */
        if($request->update =='paid'){

            /**
             * Post to assigned matrix
             */
            DB::table('question_matrices')->where('question_id', $question)
                ->update(
                    [
                        'cancelled' => 0,
                        'reassigned' => 0,
                        'completed' => 1, //accepted
                        'rated' => 1,
                        'paid' => 0,
                        'revision' => 0,
                        'answered' => 1,
                        'assigned' => 1,
                        'current' => 0,
                        'paid' => 1,
                        'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                    ]
                );

            /**
             * insert the history of the ratings
             */

            DB::table('question_histories')->insert(
                [

                    'user_id' => Auth::user()->email,
                    'question_id' => $question,
                    'status' => 'paid',
                    'moderator' => 'Jeremy',
                    'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ]);

        }




        if($request->update =='rated'){
            /**
             * Post to assigned matrix
             */
            DB::table('question_matrices')->where('question_id', $question)
                ->update(
                    [
                        'cancelled' => 0,
                        'reassigned' => 0,
                        'completed' => 0,
                        'rated' => 1,
                        'paid' => 0,
                        'revision' => 0,
                        'answered' => 1,
                        'assigned' => 1,
                        'current' => 0,
                        'paid' => 0,
                        'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                    ]
                );

            /**
             * inssert the ratings of the question
             */
            DB::table('question_ratings')->insert(
                [

                    'user_id' => Auth::user()->email,
                    'ratings' => $request->rating,
                    'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ]);

            /**
             * insert the history of the ratings
             */

            DB::table('question_histories')->insert(
                [

                    'user_id' => Auth::user()->email,
                    'question_id' => $question,
                    'status' => 'The Question has been rated',
                    'moderator' => 'Jeremy',
                    'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ]);

       }




        if($request->update =='postAnswer'){
            //file uploads

        $file = Input::file('file');
      
        if(is_array($file)){

        $dest = public_path().'/storage/uploads/'.$question.'/answer/';

        foreach ($file as $files){


                /*
                 * loop through multiple files 
                 */

                $name =  $files->getClientOriginalName();
                $files->move($dest, $name);
            }
            
        }
       /*
         * Update the question status
         */


        
         DB::table('post_answers')->insert(
            [
                'answer_id'=>rand(9000,90000),
                'overdue' => '0',
                'question_id' =>$question,
                'user_id' => Auth::user()->email,
                'answered' => 1,
                'answer_body' => $request['answer_body'],
                'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);


            DB::table('post_comments')->insert(
                [
                    'comment_body' => "Thank you for providing answer in time",
                    'comments_id' =>  rand(1000, 9999),
                    'question_id' =>$question,
                    'message_type'=>'answered',
                    'user_id' => Auth::user()->email,
                    'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ]);

            /**
             * Update the matrix table
             *
             */

            DB::table('question_matrices')->where('question_id', $question)
                ->update(
                    [
                        'cancelled' => 0,
                        'reassigned' => 0,
                        'completed' => 0,
                        'rated' => 0,
                        'paid' => 0,
                        'revision' => 0,
                        'answered' => 1,
                        'assigned' => 1,
                        'current' => 0,
                        'paid' => 0,
                        'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                    ]
                );

        $this->UpdateStatus($question, 'answered');

        }

        /**
         *
         */

        /**
         * Reassign Questions
         */

        if($request->update =='reassigned'){


            DB::table('post_comments')->insert(
                [
                    'comment_body' => "Question has been Reassigned ",
                    'comments_id' =>  rand(1000, 9999),
                    'question_id' => $question,
                    'message_type'=>'Ressigned',
                    'user_id' => Auth::user()->email,
                    'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ]);

            DB::table('question_matrices')->where('question_id', $question)
                ->update(
                    [
                        'cancelled' => 0,
                        'reassigned' => 1,
                        'completed' => 0,
                        'rated' => 0,
                        'paid' => 0,
                        'revision' => 0,
                        'answered' => 0,
                        'assigned' => 1,
                        'current' => 1,
                        'paid' => 0,
                        'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                    ]
                );

            $this->UpdateStatus($question, 'Assigned');

        }
    
        /*
         * Check if the request is commit 
         */

        
        if($request->update =='commit'){


            DB::table('post_comments')->insert(
                [
                    'comment_body' => "Welcome! You have been assigned to this question,
                    please ensure that you provide quality answer",
                    'comments_id' =>  rand(1000, 9999),
                    'question_id' => $question,
                    'message_type'=>'Commit',
                    'user_id' => Auth::user()->email,
                    'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ]);

            DB::table('question_matrices')->where('question_id', $question)
                ->update(
                    [
                        'cancelled' => 0,
                        'reassigned' => 0,
                        'completed' => 0,
                        'rated' => 0,
                        'paid' => 0,
                        'revision' => 0,
                        'answered' => 0,
                        'assigned' => 1,
                        'current' => 0,
                        'paid' => 0,
                        'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                    ]
                );

            $this->UpdateStatus($question, 'Assigned');
            
        }
        
        /*
         * Check if the request is dispute
         */
        
        if($request->update =='dispute'){
            DB::table('dispute_questions')->insert(
            [
                'status' => 'disputed',
                'question_id' =>$question,
                'reason' => $request->input('message'),                
                'user_id' => Auth::user()->email,
                'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            $this->UpdateStatus($question, 'disputed');
        }
        
        /*
         * Check if the request is finished
         */
        
        if($request->update =='finished'){
            $this->QuestionStatusHistory('finished_questions', $question, 'finished');
            
             $this->UpdateStatus($question, 'finished');
            
        }
        
        /*
         * Check if the request is finished
         */
        
        if($request->update =='optout'){
            
            $this->QuestionStatusHistory('unassigned_questions', $question, 'available');
            
             $this->UpdateStatus($question, 'available');
        }
        
        
         /*
         * Check if the request is unassined
         */
        
        if($request->update =='unassign'){
            
              $this->QuestionStatusHistory('unassigned_questions', $question, 'available');
              
               $this->UpdateStatus($question, 'available');
            
        }       
        
        
         /*
         * Check if the request is paid 
         */
        
        if($request->update =='paid'){
            
              $this->QuestionStatusHistory('finished_questions', $question, 'paid');
              
               $this->UpdateStatus($question, 'paid');
            
        }
                
        /*
         * Check if the request is reassigned
         */
        
        if($request->update =='reassign'){
              $this->QuestionStatusHistory('finished_questions', $question, 'reassigned');
              
               $this->UpdateStatus($question, 'reassigned');
        }
        
        
        /*
         * Check if the request is Accept
         */
        
        if($request->update =='cancel'){
              $this->QuestionStatusHistory('finished_questions', $question, 'cancelled');
              
              $this->UpdateStatus($question, 'cancelled');
        }
        
        /*
         * Check if the request is Accept Answer
         */
               
        if($request->update =='accept'){
            
            $this->UpdateStatus($question, 'accepted');
            
            $this->QuestionStatusHistory('accept_questions', $question, 'accepted');

        }
        
        /*
         * Add status to the questuon
         */
        
        return redirect()->route('view-question', ['question_id'=> $question]);

    }



    public function increaseDeadline(Request $request, $question)
    {
        $quest = new SuggestDeadline;

        /*
         * Get the question ID
         * Insert using Eloquent
         * Get question ID
         */

        $quest->question_id = $question;

        /*
         * Getcomments bodyformthe post
         * create the post date
         */

        $quest->question_deadline= $request->input('question_deadline');

        /*
         * Getcomments bodyformthe post
         * create the post date
         */

        $quest->user_id = Auth::user()->email;
        $quest->save();

        return redirect()->route('view-question', ['question_id'=> $question]);

    }


    /*
     * Files data to database here I dream
     */

    public function Information(Request $request){


    }

    public function  PostComments(Request $request, $question){
        $comments_id = rand(1000, 9999);
        
        $path=  public_path().'/storage/uploads/'.$question.'/comments/'.$comments_id;
     
        $this-> FileUploads($request, $path);
            
        /*
         * Give comments an IDentificatiion Number
         */

        $path1 = '/storage/uploads/'.$question.'/comments/'.$comments_id;

        DB::table('post_comments')->insert(
            [
                'comment_body' => $request['comment_body'],
                'comments_id' =>$comments_id,
                'question_id' =>$question,
                'message_type'=>$request->commtype,
                'user_id' => Auth::user()->email,
                'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);

        $file = Input::file('file');


        foreach ($file as $files){

            $name =  $files->getClientOriginalName();

            DB::table('comment_files')->insert(
                [
                    'file_name' => $name,
                    'comment_id' => $comments_id,
                    'file_path'=> $path1,
                     'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ]);

        }

        
        return redirect()->route('view-question', ['question_id'=> $question]);
    }
    
    /*
     * Use this function to update question status history
     */

    public function QuestionStatusHistory($database, $question,$mess){

            DB::table($database)->insert(
                [
                    'status' => $mess,
                    'question_id' =>$question,
                    'user_id' => Auth::user()->email,
                    'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ]);

        return redirect()->route('view-question', ['question_id'=> $question]);

    }
    
    /*
     * Update status here 
     */
    
    public function UpdateStatus($question_id, $status){
            
    $priceSquestDet = DB::table('question_status_models')->where('question_id', $question_id)->get();
  
     
    if(!$priceSquestDet->isEmpty()){      
      
       
                DB::table('question_status_models')->where('question_id', $question_id)
                        ->update(
                                    [
                                        'status' => $status, 
                                        'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                                    ] 
                                );  
            }
      }
      
      public function FileUploads(Request $request, $path){

        /*
         * The state of the school
         */
          
         $file = Input::file('file');

          $dest = $path;

            foreach ($file as $files){

                $name =  $files->getClientOriginalName();

                $files->move($dest, $name);

            }
      }

    //Question Status

    
    public function  PostAnswer(Request $request, $question){

        //file uploads

        $file = Input::file('file');

        $dest = public_path().'/storage/uploads/'.$question.'/answer/';

            foreach ($file as $files){
                $name =  $files->getClientOriginalName();
                $files->move($dest, $name);
            }
            
        /*
         * Update the question status
         */
            
            $this->UpdateQuestionStatus($request, $question);

        //Insert into database

       DB::table('post_answers')->insert(
            [
                'overdue' => '0',
                'question_id' =>$question,
                'user_id' => Auth::user()->email,
                'answered' => 1,
                'answer_body' => $request['answer_body'],
                'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);

        //update status

        $this->Status($question, 'answered');

        return redirect()->route('view-question', ['question_id'=> $question]);

    }

    public function questionAll()
    {
        /*
         * Quesry Database here for all questions
         */
        $questions = DB::table('post_question_models')->get();
        /*
         * return Question Blog
         */

        return view('questions.question-blog', ['question' => $questions]);
    }

    public function getAskQuestion()
    {
        /*
         * Select distinct form table Questions
         */


        return view('questions.ask-question');

    }

    public function askPriceDeadline(Request $request)
    {
        $username = Auth::user()->email;
        $question_id =  $value = session('question_id');

        return view('questions.ask-deadline',['username'=>$username, 'question_id'=> $question_id] );

    }

    public function viewQuestion(){

        return view('quest.question-det');
    }

        /*
         * use this to delete string
         */
    public static  function delete_all_between($beginning, $end, $string) {
        $beginningPos = strpos($string, $beginning);
        $endPos = strpos($string, $end);
        if ($beginningPos === false || $endPos === false) {
            return $string;
        }

        $textToDelete = substr($string, $beginningPos, ($endPos + strlen($end)) - $beginningPos);

        return str_replace($textToDelete, '', $string);
        }


        public function askQuestions(Request $request)
        {
            $question_id = str_random(25);

            $number_of_words = rand (300,400);

            $summary = substr($request->question_body,0, $number_of_words);

            $summary1 = strip_tags($summary);
            
            /*
             * 
             * file picker starts here 
             */
            
            $file = Input::file('file');
      
            if(is_array($file)){

            $dest = public_path().'/storage/uploads/'.$question_id.'/qestion/';

            foreach ($file as $files){
                    /*
                     * loop through multiple files 
                     */
                    $name =  $files->getClientOriginalName();
                    $files->move($dest, $name);
                }

            }

            /*
             * Insert into database 
             */

           DB::table('question_bodies')->insert(
                [
                    'question_body' => $request['question_body'],
                    'question_id' =>$question_id,
                    'category' => $request['category'],
                    'user_id' => Auth::user()->email,
                    'summary' => $summary1,
                    'special' => $request['special'],
                    'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString()

                ]);

            
             DB::table('question_matrices')->insert(
                [
                   
                    'question_id' =>$question_id,
                    'current' => 1,
                    'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString()

                ]);
            
            /*
             * Add question Id to session, this is to be used in the adding of the price
             */

             $request->session()->put('question_id',  $question_id);

            return redirect()->route('post-deadlinePrice');
    }

    public function PostQuestionPriceDeadline(Request $request){

        DB::table('post_question_prices')->insert(
            [
                'question_id' =>session('question_id'),
                'question_deadline' => $request['question_deadline'],
                'question_price' =>$request['question_price'] ,
                'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()

            ]);

        return redirect()->route('post-questions');

    }

    /*
     * View Deadline post
     */

    public function postdeadlinePrice(){

        return view('quest.ask-deadline');

        }

    /*
     * Open View to post questions
     */

    public function postQuestions(){
        return view('quest.ask-question');
    }

    public function generateRandomString() {
        $length = 12;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

   public function allQuestions (){


        $questions = DB::table('question_bodies')
            ->join('post_question_prices', 'question_bodies.question_id', '=', 'post_question_prices.question_id')
            ->leftjoin('question_status_models', 'question_status_models.question_id', '=', 'question_bodies.question_id')
            ->select('question_bodies.*','post_question_prices.question_deadline',
                'post_question_prices.question_price','post_question_prices.overdue')
            
            ->where('overdue',0)


            ->paginate(25);


        return view('home', ['question' => $questions]);

    }

}
