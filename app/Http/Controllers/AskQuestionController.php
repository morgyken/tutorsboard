<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\QuestionStatusModel;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use DB;
use Storage;
use App\Http\Controllers\PaymentController;
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
    public function __costruct()
    {
        $this->middleware('QuestionOverdue');
    }

    public function UpdateBonus()
    {                //update tutor payment

        DB::table('tutor_payment')->where('order_id', session('question_id'))
                    ->update(
                        [
                            'amount' => round($request['question_price'] *8* 0.22, 2),
                            'tutor_id' => Auth::user()->email,
                            'paid_by'  => Auth::user()->email,
                            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                        ]
                 );

        DB::table('question_bodies')->where('question_id', session('question_id'))
        ->update(
            [
                'category' => $request->category,
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ]
     );
        return redirect()->route('get-payment');

    }



    public function PostQuestionPriceDeadline(Request $request){

        $payment = new PaymentController;

        $quest_price = $payment-> TutorPrice($request->question_price,'junior');

        DB::table('post_question_prices')->insert(
            [
            'question_id' =>session('question_id'),
            'question_deadline' => $request['question_deadline'],
            'question_price'   =>$payment->QuestionPrice($request->question_price, $request->pages, $request->urgency),
            'urgency'          =>$request['urgency'],
            'academic_level'   => $request->academic_level,
            'paper_format'     => $request->paper_format,
            'tutor_price'      =>  $quest_price,
            'pages'           => $request['pages'],
            'created_at'      =>\Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'       => \Carbon\Carbon::now()->toDateTimeString()

            ]);

       //update bonus table

        DB::table('tutor_payment_bonuses')->where('order_id', session('question_id'))
            ->update(
                [
                            'amount' => round($request['question_price'] *88* 0.43, 2),
                            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                ]
             );

        // store session amount

        $request->session()->put('order_amount', $request['question_price']);

        // store session amount

        $request->session()->put('deadline', $request['question_deadline']);

        //redirect to check out

        return redirect()->route('get-cust-payments');

    }

    public function askQuestions(Request $request)
    {

      //get the question serial

      $serial = DB::table('question_bodies')
                            ->select('question_serial')
                            ->orderby('question_serial', 'desc')
                            ->first();
        //get the head of the question serial and add 1

        $question_serial = $seril-> question_serial + 1;

        //dd($request->academic_level);

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
                'user_id' => Auth::user()->email,
                'topic'    => $request->topic,
                'summary' => $summary1,
                'special' => $request['special'],
                'question_serial'=>$question_serial,
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

            //tutor Bonuses

        DB::table('tutor_payment_bonuses')->insert(
            [
                'order_id'      =>  $question_id,
                'payment_id'    =>  rand(9999,99999),
                'status'        =>  0,
                'created_at'    =>  \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'    =>  \Carbon\Carbon::now()->toDateTimeString()
            ]);


        /*
         * Add question Id to session, this is to be used in the adding of the price
         */

        $request->session()->put('question_id',  $question_id);

        // store session amount

        $request->session()->put('order_summary', substr($request['question_body'], 0, 200));

        //redirect to post deadline view

        return redirect()->route('post-deadlinePrice');
    }
}
