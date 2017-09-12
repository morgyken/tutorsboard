<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

use App\User;

use App\question_body;

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
    public function TutProfile($email, $optional=null){

        $count = DB::table('question_bodies')
            ->leftjoin('post_question_prices', 'question_bodies.question_id', '=', 'post_question_prices.question_id')
            ->leftjoin('question_status_models', 'question_bodies.question_id', '=', 'question_status_models.question_id')
            ->select('question_bodies.question_id', 'question_bodies.summary',
                'question_status_models.status',
                'post_question_prices.created_at',
                'post_question_prices.question_deadline', 'post_question_prices.question_price')
            ->orderBy('post_question_prices.created_at', 'asc')
            ->where('question_bodies.user_id', $email)
            ->where('status', 'answered')
            ->count();

        $sum = DB::table('question_bodies')
            ->leftjoin('post_question_prices', 'question_bodies.question_id', '=', 'post_question_prices.question_id')
            ->leftjoin('question_status_models', 'question_bodies.question_id', '=', 'question_status_models.question_id')
            ->where('question_bodies.user_id', $email)
            ->where('status', 'answered')
            ->sum('question_price');

        $user = DB::table('users')
            ->where('email', $email)
            ->first();

        if($optional == null) {
            $comments = DB::table('question_bodies')
                ->leftjoin('post_question_prices', 'question_bodies.question_id', '=', 'post_question_prices.question_id')
                ->leftjoin('question_status_models', 'question_bodies.question_id', '=', 'question_status_models.question_id')
                ->select('question_bodies.question_id', 'question_bodies.summary',
                    'question_status_models.status',
                    'post_question_prices.created_at',
                    'post_question_prices.question_deadline', 'post_question_prices.question_price')
                ->orderBy('post_question_prices.created_at', 'asc')
                ->where('question_bodies.user_id', $email)
                ->paginate(10);
        }
        else{
            $comments = DB::table('question_bodies')
                    ->leftjoin('post_question_prices', 'question_bodies.question_id', '=', 'post_question_prices.question_id')
                    ->leftjoin('question_status_models', 'question_bodies.question_id', '=', 'question_status_models.question_id')
                    ->select('question_bodies.question_id', 'question_bodies.summary',
                        'question_status_models.status',
                        'post_question_prices.created_at',
                        'post_question_prices.question_deadline', 'post_question_prices.question_price')
                    ->orderBy('post_question_prices.created_at', 'asc')
                    ->where('question_bodies.user_id', $email)
                    ->where('status', $optional)
                    ->paginate(10);



        }
        return view('tut.profile-revised',['comments'=> $comments,'sum' => $sum, 'user'=>$user, 'count'=>$count]);

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

    public function AdmDashboard(){
        return view ('adm.index-admin');
    }



}
