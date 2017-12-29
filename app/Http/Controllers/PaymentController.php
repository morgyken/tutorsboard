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
    public function getPayments()
    {
    	$data = DB::table('tutor_payment')->where('status', 0)->get();

    	$amount = DB::table('tutor_payment')->select('amount')->where('status', 0)->get();

    	$sum = array_sum($amount)
    	  	

       return view('adm.show-tutor-payment',['data'=> $data, 'sum'=> $sum]);
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
