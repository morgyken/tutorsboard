<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

class CustomerPayments extends Controller
{
   public function getCustPayment(){

   	return view('cust.cust-payments');

   }
   public function postCustPayment(Request $request){

   	//getthe price here 
   	 //$value = $request->session()->get('key');

   	$question_id =  $request->session()->get('question_id'); 



   	$price = DB::table('post_question_prices')
   				->select('question_price')
   				->where('question_id', $question_id)
   				->first();

   //return array from object 

   $price = json_decode(json_encode($price), true);

	// Set your secret key: remember to change this to your live secret key in production
	// See your keys here: https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey("sk_test_PJMKcFTzsKNgsOCxwtkTxdMr");

	// Token is created using Checkout or Elements!
	// Get the payment token ID submitted by the form:
	$token = $request ->stripeToken;
	// Charge the user's card:
	$charge = \Stripe\Charge::create(array(
	  "amount" =>$price['question_price'] * 100,
	  "currency" => "usd",
	  //"metadata" => array("order_id" => ),
	  "statement_descriptor" => "Payment for Home Assignmment Services",
	  "description" => "Example charge",
	  "source" => $token,
	));

	//dd($request->session()->all());

	//rediect to customer dashboard
	 return redirect()->route('cust-dashboard');
   }
}
