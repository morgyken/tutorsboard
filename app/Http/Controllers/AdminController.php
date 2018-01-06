<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

use App\User;


use App\question_body;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /*
     * Paymemt requests 
     */

    public function AdmGetPyments(){
        
        $payreq = DB::table('payment_requests')           
                ->paginate(34);
        
        return view('adm.dopayments', ['payment_req'=> $payreq]);
        
    }


    public function AdmDashboard()
    {

        $question = DB::table('question_bodies')->get();

        return view ('adm.show-index-admin', ['questions' => $question]);
    }
    
     public function AdmPostPyments($request_id, $amount){
        
        
        DB::table('payments')->insert(
            [              
                'user_id' => Auth::user()->email,
                'amount' => $amount,
                'withdrawal_id' => $request_id,
                'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);
       
        return view('adm.dopayments', ['payment_req'=> $payreq]);
        
    }
    public function AdmQLoader(){

        $questions  =   $this->returnQuery12(20);

        $answered   =   $this->returnQuery(15, 'answered');

        $answered   =   $this->returnQuery(15, 'accepted');

        $disputed   =   $this->returnQuery(15, 'disputed');

        $new        =   $this->returnQuery(20, 'new');

        $paid       =   $this->returnQuery(15, 'paid');

        $finished   =   $this->returnQuery(15, 'finished');

        $reassigned =   $this->returnQuery(15, 'reassigned');

        $reassigned =   $this->returnQuery(15, 'cancelled');

        return view ('adm.allQuestions',
            [
                'question'      =>  $questions,
                'answered'      =>  $answered,
                'new'           =>  $new,
                'paid'          =>  $paid,
                'finished'      =>  $finished,
                'reassigned'    =>  $reassigned,
                'disputed'      =>  $disputed

            ]

        );
    }

    public function returnQuery($num, $status){

        $question1 = DB::table('question_bodies')
            ->leftjoin('post_question_prices', 'question_bodies.question_id', '=', 'post_question_prices.question_id')
            ->leftjoin('question_status_models','question_bodies.question_id','=','question_status_models.question_id')
            ->select('question_bodies.question_id', 'question_bodies.summary',
                'question_status_models.status',
                'post_question_prices.created_at',
                'post_question_prices.question_deadline', 'post_question_prices.question_price')
            ->where('question_status_models.status', '=', $status)
            ->orderBy('post_question_prices.created_at', 'asc')
            ->paginate($num);

        return $question1;
    }

    public function findTutorprofile($email){

        /**
         * Total Questions answered by tutor
         */

        $count = DB::table('question_bodies')

            ->leftjoin('question_matrices', 'question_bodies.question_id', '=', 'question_matrices.question_id')
            ->where('answered', 1)
            ->where('question_bodies.user_id', $email)
            ->count();
        /**
         * The sum of answered question
         */
        $sum = DB::table('question_bodies')
            ->leftjoin('post_question_prices', 'question_bodies.question_id', '=', 'post_question_prices.question_id')
            ->leftjoin('question_matrices', 'question_bodies.question_id', '=', 'question_matrices.question_id')
            ->where('question_bodies.user_id', $email)
            ->where('answered', 1)
            ->sum('question_price');

        $sum_2 = DB::table('question_bodies')
            ->leftjoin('post_question_prices', 'question_bodies.question_id', '=', 'post_question_prices.question_id')
            ->leftjoin('question_status_models', 'question_bodies.question_id', '=', 'question_status_models.question_id')
            ->where('question_bodies.user_id', $email)
            ->where('status', 'answered')
            ->sum('question_price');

        $user = DB::table('users')
            ->where('email', $email)
            ->first();

            $comments = DB::table('question_bodies')
                ->leftjoin('post_question_prices', 'question_bodies.question_id', '=', 'post_question_prices.question_id')
                ->leftjoin('question_matrices', 'question_bodies.question_id', '=', 'question_matrices.question_id')
                ->orderBy('post_question_prices.created_at', 'asc')
                ->where('question_bodies.user_id', $email)
                ->where('assigned', 1)
                ->paginate(10);


        $return = array('comments'=>$comments, 'sum'=>$sum, 'sum2'=>$sum_2,'count'=> $count );


        return $return;
    }
    public function TutProfile($status=null){

        $email = Auth::user()->email;

        $details = $this->findTutorprofile($email);

        $sum = $details['sum'];

        $sum_2 = $details['sum2'];

        $comments = $details['comments'];

        $count=  $details['count'];
        $user = Auth::User()->name;

        /*
        * move between the different links such as assigned, competed
        * etc
        */

        if($status != null)
        {
            $questions = DB::table('question_bodies')
            ->join('post_question_prices', 'question_bodies.question_id', '=', 'post_question_prices.question_id')
            ->leftjoin('question_matrices', 'question_matrices.question_id', '=', 'question_bodies.question_id')
            ->select('question_bodies.*','post_question_prices.question_deadline',
                'post_question_prices.question_price')

            ->where('current',1)

            //check question URL

            ->where($status, 1)

            //check overdue Questions

            ->where('overdue',0)

            ->orderby('question_deadline', 'asc')

            ->paginate(20);
        }
        
        else
        {
            $questions = DB::table('question_bodies')
            ->join('post_question_prices', 'question_bodies.question_id', '=', 'post_question_prices.question_id')
            ->leftjoin('question_matrices', 'question_matrices.question_id', '=', 'question_bodies.question_id')
            ->select('question_bodies.*','post_question_prices.question_deadline',
                'post_question_prices.question_price')

            ->where('current',1)

            //do not show overdue questions
            ->where('overdue',0)

            ->orderby('question_deadline', 'asc')

            ->paginate(20);
        }

        

        return view('tut.home',[

            'comments'=> $comments,
            /*
             * Current sum
             */
            'sum' => $sum,
            /*
             * user profile
             */

            'question' => $questions,

            'user'=>$user,

            'count'=>$count,

            /*
             * cumulative sum
             */

            'sum_2' => $sum_2,

        ]);

    }


    public function getPayments()
    {

        Auth::user()->email;
        $questions = DB::table('payment_models')->where('tutor_id', $user_id);
    }

    /**
     *Other tutor pages
     */

    public function TutorLinks( $view, $optional=null){

        $email = Auth::user()->email;

        $details = $this->findTutorprofile($email, $optional);

        $sum = $details['sum'];

        $sum_2 = $details['sum2'];

        $comments = $details['comments'];

        $count=  $details['count'];
        $user = Auth::User()->name;

        $questions = DB::table('question_bodies')
            ->join('post_question_prices', 'question_bodies.question_id', '=', 'post_question_prices.question_id')
            ->leftjoin('question_matrices', 'question_matrices.question_id', '=', 'question_bodies.question_id')
            ->select('question_bodies.*','post_question_prices.question_deadline',
                'post_question_prices.question_price','post_question_prices.overdue')

            ->where($view,1)

            ->orderby('question_deadline', 'asc')

            ->paginate(25);

        return view('tut.home',[

            'comments'=> $comments,
            /*
             * Current sum
             */
            'sum' => $sum,
            /*
             * user profile
             */

            'question' => $questions,

            'user'=>$user,

            'count'=>$count,

            /*
             * cumulative sum
             */

            'sum_2' => $sum_2,

        ]);

    }


    public function returnQuery12($num){

        $question1 = DB::table('question_bodies')
            ->leftjoin('post_question_prices', 'question_bodies.question_id', '=', 'post_question_prices.question_id')
            ->leftjoin('question_status_models','question_bodies.question_id','=','question_status_models.question_id')
            ->select('question_bodies.question_id', 'question_bodies.summary',
                'question_status_models.status',
                'post_question_prices.created_at',
                'post_question_prices.question_deadline', 'post_question_prices.question_price')
            ->orderBy('post_question_prices.created_at', 'asc')
            ->paginate($num);

        return $question1;
    }

    public function AdmTutors(){

        $user = DB::table('users')
                ->where('user-type', '')
                ->orderby('email')
                ->paginate(1200);

        return view ('adm.allTutors',['users'=> $user ] );

    }

    public function AdmPayments(){
        return view ('adm.payments');
    }

    public function AdmProfile(){
        return view ('adm.profile');
    }

  
    public function QuestionDetails($question_id, $optional= null){

       $email = Auth::user()->email;

        $details = $this->findTutorprofile($email, $optional);

        $sum = $details['sum'];

        $sum_2 = $details['sum2'];

        $comments1 = $details['comments'];

        $count=  $details['count'];


        $user1 = Auth::User()->name;



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

            'comments1'=> $comments1,
            /*
             * Current sum
             */
            'sum' => $sum,
            /*
             * user profile
             */

            'question' => $questions,

            'user1'=>$user1,

            'count'=>$count,

            /*
             * cumulative sum
             */

            'sum_2' => $sum_2,


            /*
             * Pass the main price of the question
             */

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

            'answer_files' => $manuals_ans

        ]);
    }




}
