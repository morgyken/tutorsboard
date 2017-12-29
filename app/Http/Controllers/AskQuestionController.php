<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Auth;

class AskQuestionController extends Controller
{

    public function PostQuestionPriceDeadline(Request $request){

        DB::table('post_question_prices')->insert(
            [
                'question_id' =>session('question_id'),
                'question_deadline' => $request['question_deadline'],
                'question_price' =>$request['question_price'] ,
                'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()

            ]);

        DB::table('tutor_payment')->where('order_id', session('question_id'))
                    ->update(
                        [
                            'amount' => round($request['question_price'] *88* 0.34, 2),
                            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                        ]
                 );

        


        return redirect()->route('post-questions');

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

            $dest = public_path().'/storage/uploads/'.$question_id.'/question/';

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
                'user_id' => Auth::user()->email,
                'question_id' =>$question_id,
                'current' => 1,
                'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()

            ]);

        DB::table('tutor_payment')->insert(
            [
                'order_id' =>$question_id,
                'payment_id' => rand(9999,99999),
                'order_summary' => substr($request['question_body'], 0, 70),
                'status'      =>0,
                'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ]);

        
        /*
         * Add question Id to session, this is to be used in the adding of the price
         */

        $request->session()->put('question_id',  $question_id);

        return redirect()->route('post-deadlinePrice');
    }
}
