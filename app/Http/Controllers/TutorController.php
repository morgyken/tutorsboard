<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

use App\User;


use App\question_body;

use Illuminate\Support\Facades\Auth;

class TutorController extends Controller
{
    
    public function tutProfile1(){
        
        $email = Auth::user()->email;

        $details = $this->findTutorprofile($email);

        $sum = $details['sum'];

        $count=  $details['count'];

        $user = Auth::User()->name;
        
        
        

        return view('layout.tut-layout_1',[


            'sum' => $sum,
            /*
             * user profile
             */

            'user'=>$user,

            'count'=>$count

        ]);
        
      
       
    }

    public function findTutorprofile($email ){

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


        $return = array('sum'=>$sum, 'count'=> $count );


        return $return;
    }
    public function TutProfile($view=Null){

        $email = Auth::user()->email;

        $details = $this->findTutorprofile($email);

        $sum = $details['sum'];

        $count=  $details['count'];

        $user = Auth::User()->name;
        
        if($view=='tut-payment'){
            return view('tut.tut-payment');
            
        }
        if($view=='tut-profile'){
            return view('tut.tut-profile');
            
        }
        if($view=='tut-account-profile'){
            return view('tut.tut-account-profile');
            
        }
        else{

        return view('tut.tut-account-profile',[


            'sum' => $sum,
            /*
             * user profile
             */

            'user'=>$user,

            'count'=>$count

        ]);
        
        }

    }

}
