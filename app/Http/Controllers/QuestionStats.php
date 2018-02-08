<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;


class QuestionStatus extends Controller
{
	

    public function clientOrderStatus($question_id){

    $status = DB::table('question_matrices')
    				->where('question_id', $question_id)
    				->first();
  
    if($status->overdue == 1)
    {
    	return "Overdue"; 
    }
    else
    	{
    
		    if($status->revision== 1)
		    {
		    	return 'Revison';
		    } 
		   
		    if($status->cancelled == 1)
		    {
		    	return 'Cancelled';
		    }
		  
		    if($status->revision == 1 )
		    {
		    	return "Revision";
		    }

		     if($status->paid == 1 )
		    {
		    	return "Paid";
		    }
		     if($status->completed == 1)
		    {
		    	return "Completed";
		    }

		     if($status->disputed == 1)
		    {
		    	return "Disputed";
		    }

		     if($status->assigned == 1)
		    {
		    	return "Assigned";
		    }
  
    	}

    	return 'Nothing';

	}
}
