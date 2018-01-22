<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Http\Controllers\UpdateQuestionController;

class QuesionBids extends Controller
{
    public function BidPoints( Request $request)

    {
    	//future modifications 

    	$user_id = $request->user_id;

    	$question = $request->question_id;
    	$points = 0.0;

    	//check the ratings of the tutor

    	$tutor_account= DB::table('tutor_accounts')->get();

    	//check the number of orders the tutor has done

    	$ratings = $tutor_account->ratings;

    	//check if the tutor is banned

    	$banned = $tutor_account->active;

     	//Assign to the tutor with the best ratings, and number of orders done

     	$number_of_questions = DB::table('question_matrix')
     							->where('answered', 1)
     							->where('user_id', $user_id)
     							->count();

     	//calculate bid points

     	$points = (0.5 * $ratings) +  ( 0.2* $banned) + (0.3 * $number_of_questions);

     	//insert the points to a database for reference

     	return  DB::table('question_bids')->insert( 
     		['tutor_id' => $user_id, 'bidpoints' => $points, 'question_id' => $question] );     
    }

    public function Awardbids($question, $user_id)

    {
    	//select first bid time

    	$firstBids 		= DB::table('question_bids')
    						->where('question_id', $question)
    						->orderby('created_at', 'asc')->first();

    	$firstBid_time 	= $firstBids->created_at;

    	//select all bids 

    	$firstBids 		= DB::table('question_bids')
    						->select('bidpoints')
    						->where('question_id', $question)
    						->limit(20)->oderby('bidpoints', 'desc')->get();

    	//assing the best biddder

    	//turn the result to array
    						
    	$bidders_toarray = collect($firstBids)->toArray();

    	//sort the bidders

    	$best_sorted = arsort($bidders_toarray);

    	//best bidders 

    	$best_bidder = $best_sorted[0];

    	//insert the best bidder

    	DB::table('question_matrices')
    			->where('question_id', $question)
    			->where('tutor_id', $user_id)
                ->update(
                    [
                        
                       	'tutor_id'           => $request->user_id,                       
                        'assigned'          => 1,
                        'current'           => 0,
                        
                        'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                    ]
                );

           //create an isntance of the question

           $updateQuestion = new UpdateQuestionController;

           //Bid post comments

           $updateQuestion-> postComment("Thank you for taking this question. Please provide a quality, plagiarism free answer within the deadline", $request->update);
      
    }
}
