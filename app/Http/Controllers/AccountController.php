<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class AccountController extends Controller
{
    public static function getAccountRating($user_id){



    	$account_ratings = DB::table('tutor_accounts')

    			->where('tutor_id', $user_id)

    			->first();
   
   //check if the tutor is ctive
    			/*

   	if ($account_ratings->status === 'active')
   	{
   		return $account_ratings->ratings;
   	}

   	else {
   		return redirect()->route('cust-dashboard')->with('status', 'The tutor is temporarily unavailble');
   	}

   	*/

   //	dd($account_ratings->ratings);

   	return $account_ratings->ratings;

    }
}
