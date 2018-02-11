<?php

namespace App\Http\Controllers;

use DB;
use App\Auth;

use Illuminate\Http\Request;

class CustomerPayments extends Controller
{
   public function getCustPayment(){

   	return view('cust.cust-payments');

   }

   //payment successful

   public function paymentSuccessful(){

   		return view('cust.payment-successful');
   }

   public function postCustPayment(Request $request){

     //save the customer details and the amount paid on the database

     $email= Auth::User()->email;

   	$question_id =  $request->session()->get('question_id');

    $price = DB::table('post_question_prices')
   				->select('question_price')
   				->where('question_id', $question_id)
   				->first();

    DB::table('customer_payments')->insert(
        [
            'payment_id' => "#". substr($question_id, 0,17),
            'amount' =>$price['question_price'],
            'payment_serial' => $rand(9999,999999), //unique identifier for payments, random for now, make incremental
            'customer_id' =>Auth::user()->email,
            'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);




   //return array from object

   $price = json_decode(json_encode($price), true);

	// Set your secret key: remember to change this to your live secret key in production
	// See your keys here: https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey("sk_test_wR9YngHY8kyTzEcixpqikNT6");

	// Token is created using Checkout or Elements!
	// Get the payment token ID submitted by the form:
	$token = $request ->stripeToken;
	// Charge the user's card:
	$charge = \Stripe\Charge::create(array(
	  "amount" =>$price['question_price'] * 100,
	  "currency" => "usd",
	  //"metadata" => array("order_id" => ),
	  "statement_descriptor" => "#". substr($question_id, 0,17),
	  "description" => "Payment for Question Answer",
	  "source" => $token,
	));

	 return redirect()->route('payment-successful');
   }
}
