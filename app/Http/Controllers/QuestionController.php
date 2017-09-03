<?php

namespace App\Http\Controllers;
use App\QuestionStatusModel;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use DB;
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

class QuestionController extends Controller
{
    /*
     * Suggest Price Increase here
     * The real course the price
     */

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
     * get question details
     */
    public function QuestionDetails($question_id){
        /*
         *  Check if assigned is assigned
         * Init assignment
         */
        $ass ='';

        $question_price= PostQuestionPrice::where('question_id', '=', $question_id)->firstOrFail();

        $assigned = QuestionStatusModel::select('status')->where('question_id', '=', $question_id)->orderby('updated_at', 'DESC')->first();

        
        /*
         * Pull whole question details
         *
         */

        $question = PostQuestionModel::where('question_id', '=', $question_id)->firstOrFail();
        /*
         * Pull question price in this model quesry
         *
         */


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
        $comments= PostQuestionModel::where('question_id', '=', $question_id)->first()
        )

        )
        {
            $comments = array();
        }
        else{

            $comments = DB::table('post_comments')->where('question_id', '=', $question_id) ->get();

            //$comments= MakeComments::select('user_id', 'comment_body', 'post_date') -> where('question_id',
            //'=', $question_id)->get();
        }
        //return $comments;

        /*
         * Price suggestions
         *
         */
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

        $questions = DB::table('question_bodies')
            ->join('post_question_prices', 'question_bodies.question_id', '=', 'post_question_prices.question_id')
            ->select('question_bodies.*','post_question_prices.question_deadline','post_question_prices.question_price'  )
            ->paginate(10);

            $user12 = Auth::User()->email;

            $user = DB::table('users')->where('email', '=', $user12) ->get();

        return view ('quest.question-det', [

            /*
             * Get user type here
             */
            'user' =>$user,

            /*
             * Get Question
             */

            'question' => $question,

            /*
             * Assigned is assigned
             */

            'assigned'=>$assigned,

            /*
             * Pass the main price of the question
             */

            'question_price' => $question_price,
            /*
             * Pass comments all of them
             */

            'comment' => $comments,
            /*
             * Pass the price to the view
             */

            'price1' => $priceSuggestion,

            /*
             * pass suggested deadline to the view
             */

            'deadlines' => $deadlines,

            'difference' => $interval,

            'price' => $question_price->question_price,

           'posted' => $posted,

        ]);
    }

    /*
     * ccept Answer
     *
     */
    public function UpdateQuestionStatus(Request $request, $question)
    {
        /*
         * Post answer here 
         */
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
        else{
            $name =  $files->getClientOriginalName();
             $files->move($dest, $name);
        }    
            
        /*
         * Update the question status
         */
            
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

        
        }
    
        /*
         * Check if the request is commit 
         */
        
        if($request->update =='commit'){
            
            DB::table('assign_questions')->insert(
            [
                'assigned' => 1,
                'question_id' =>$question,
                'user_id' => Auth::user()->email,
                'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);
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
            
             $this->UpdateStatus($question_id, 'finished');
            
        }
        
        
         /*
         * Check if the request is unassined
         */
        
        if($request->update =='unassign'){
            
              $this->QuestionStatusHistory('unassined_questions', $question, 'available');
              
               $this->UpdateStatus($question_id, 'available');
            
        }       
        
        
         /*
         * Check if the request is paid 
         */
        
        if($request->update =='paid'){
            
              $this->QuestionStatusHistory('finished_questions', $question, 'paid');
              
               $this->UpdateStatus($question_id, 'paid');
            
        }
        
        
        /*
         * Check if the request is reassigned
         */
        
        if($request->update =='reassign'){
              $this->QuestionStatusHistory('finished_questions', $question, 'reassigned');
              
               $this->UpdateStatus($question_id, 'reassigned');
        }
        
        
        /*
         * Check if the request is Accept
         */
        
        
        
        if($request->update =='cancel'){
              $this->QuestionStatusHistory('finished_questions', $question, 'cancelled');
              
              $this->UpdateStatus($question_id, 'cancelled');
        }
        
        /*
         * Check if the request is Accept Answer
         */
               
        if($request->update =='accept'){
            
            $this->UpdateStatus($question_id, 'accept');
            
            $this->QuestionStatusHistory('accept_questions', $question, 'accept');

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

    //admin comments

    public function  PostAdminComments(Request $request, $question){

        DB::table('post_comments')->insert(
            [
                'comment_body' => $request['comment_body'],
                'question_id' =>$question,
                'message_type'=>'admin comm',
                'user_id' => Auth::user()->email,
                'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);

        return redirect()->route('view-question', ['question_id'=> $question]);
    }

    public function  PostComments(Request $request, $question){
        
        if($request->commtype == 'admin'){
            $comm = 'Adm'; 
        }
        
        else{
            $comm = 'tut';
        }
      

        DB::table('post_comments')->insert(
            [
                'comment_body' => $request['comment_body'],
                'question_id' =>$question,
                'message_type'=>$comm,
                'user_id' => Auth::user()->email,
                'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);

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

        DB::table('question_status_models')->where('question_id', $question_id)
                ->update(
                            [
                                'status' => $status, 
                                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                            ] 
                        );            
          }


    //Question Status

    public function Status($question_id, $status){

        DB::table('question_status_models')->insert(
            [
                'question_id' =>$question_id,
                'status' => $status,
                'user_id' => Auth::user()->email,
                'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);
    }
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

        //return $questions;

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



    /*
    Post Questions
    */


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
           /*
            * Update status using the status functon
            */

            $this->Status($question_id, 'new');
            
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
    /* File input is done here
        */
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
            ->select('question_bodies.*','post_question_prices.question_deadline','post_question_prices.question_price'  )
            ->paginate(25);


        return view('home', ['question' => $questions]);

    }

}
