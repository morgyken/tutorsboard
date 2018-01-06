<?php

namespace App\Http\Controllers;
use DB;
use Storage;
use Response;
use Session;
use Illuminate\Http\Request;
use Auth;

class PaymentController extends Controller
{

    public function QuestionPrice($price, $pages, $urgency){

        
        if($pages = null)
        {

            if($urgency === 'veryhigh')
                {
                    $price = $price + 45;

                }
            elseif($urgency === 'high')
                {
                    $price = $price + 35;

                }
            elseif($urgency === 'medium')
                {
                    $price = $price + 25;

                }
            elseif($urgency === 'low')
                {
                    $price = $price + 15;

                }
            else{
                     $price = $price;
            }
        }
        else
        {
         if($urgency === 'veryhigh')
                {
                    $price = $price + 20* $pages;

                }
            elseif($urgency === 'high')
                {
                    $price = $price + 18 * $pages;

                }
            elseif($urgency === 'medium')
                {
                    $price = $price + 15* $pages;

                }
            elseif($urgency === 'low')
                {
                    $price = $price + 10 * $pages;

                }
            else{
                     $price = $price;
            }


        }

        return $price;
        

    }
    //add grouping to this tier to get the group account payment

    public function TutorPrice($question_price, $level)
    {
        $amount = 0;

        if($level === 'junior')
        {
            $amount = round($question_price *88* 0.47, 2);
        }
         if($level === 'major')
        {
            $amount = round($question_price *88* 0.52, 2);
        }
         if($level === 'senior')
        {
            $amount = round($question_price *88* 0.57, 2);
        }
         if($level === 'proWriter')
        {
            $amount = round($question_price *88* 0.62, 2);
        }

         if($level === 'manager')
        {
            //check the nummber of orders managed and add 100* per order
            //count of orders done during this period
            $count = 2;

            $amount = round($question_price *87* 0.65, 2) + 100* $count;
        }

        return $amount;
    }
    public function getPayments($myurl=null)
    {
    	$sum = 0; 

    	if($myurl == 'payment-history')
    	{

    		$data = DB::table('tutor_payment')->get();
 
    	}
    	if($myurl === 'payment-bonuses')
    	{

    		$data = DB::table('tutor_payment_bonuses')->where('status', 0)->get();

    	}
    	else
    	{
    		$data = DB::table('tutor_payment')->where('status', 0)->get();
    	}

    	//get sum of the total 
    	$amount = DB::table('tutor_payment')->select('amount')->where('status', 0)->get();

    	foreach ($amount as $key => $value) 
    	{
    	   		# code...
    			$sum += $value->amount;
    	}   

       return view('adm.show-tutor-payment',['data'=> $data, 'myurl' => $myurl, 'sum'=> $sum]);
    }

    public function postPayments(Request $request)
    {  
    	$payment_id = rand(9999,999999);

    	$user = Auth::user()->email;


    	$order_array = json_decode($request->order_array);

    	foreach ($order_array as $key => $value) {
    		$payment_id1 = rand(9999,999999);
    		# code...
    		DB::table('tutor_payment')->where('order_id', $value)
                  ->update(
                [
                    'tutor_id' 		=>$request->tutor_id,
                    'payment_id'	=> $payment_id1,
                    'status'		=> 1,                    
                    'paid_by'		=> $request->paidby,
                    'created_at' 	=>\Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' 	=> \Carbon\Carbon::now()->toDateTimeString(),
                ]);
    	}
    	
    	//Insert totals here   	

    	DB::table('tut_payment_totals')
                  ->insert(
                [    
                	'tutor_id'	=> Auth::user()->email,                
                    'payment_id'	=> $payment_id,
                    'amount'		=> $request->amount,
                    'paid_by'		=> $request->paidby,

                    'created_at' 	=>\Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' 	=> \Carbon\Carbon::now()->toDateTimeString(),
                ]);

                return redirect()->route('get-payment');
    	}   
    }
