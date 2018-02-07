<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuestionMatix;
use DB;

class QuestionStatus extends Controller
{
    public function status($questionId, $user){

    	//return the questions status string 

    	$data = DB::table('question_matrices')
    			->select('question_matrices.*')
    			->where('questionn_id', $questionId)
    			->first();

    	if($user === 'customer')
    	{
    		if(
    		)
    	}


    	return $tatus;
    }
}
