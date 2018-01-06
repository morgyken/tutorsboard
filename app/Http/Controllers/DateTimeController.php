<?php

namespace App\Http\Controllers;

use DB;

class DateTimeController extends Controller
{

    public function ConvertTime( $seconds){


          $hours = floor($seconds / (60 * 60));

          // extract minutes
          $divisor_for_minutes = $seconds % (60 * 60);
          $minutes = floor($divisor_for_minutes / 60);

          // extract the remaining seconds
          $divisor_for_seconds = $divisor_for_minutes % 60;
          $seconds = ceil($divisor_for_seconds);

          // return the final array
          $obj = array(
              "h" => (int) $hours,
              "m" => (int) $minutes,
              "s" => (int) $seconds,
          );

        return $obj;

    }

public static function UpdateDeadline(){

  $data = DB::table('post_question_prices')
                ->select('question_id', 'question_deadline')->get();

              

foreach ($data as $key => $value) {

  $deadline = getDeadlineInSeconds12($value->question_deadline);
  $dead = 0;

  if($deadline > 0){

    $dead =0 ;
  }
  else 
    $dead =1;

 // echo $dead;

  DB::table('question_matrices')->where('question_id', $value->question_id)
                        ->update(
                                    [
                                        'overdue' => $dead, 
                                        'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                                    ] 
                                ); 
      }//end foreach

  

}




public function getDeadlineInSeconds12($deadline){
   

    $TimeStart = strtotime(\Carbon\Carbon::now());

    $TimeEnd = strtotime($deadline);

    $Difference = ($TimeEnd - $TimeStart);

    return $Difference;

    }


    
}
