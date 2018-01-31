<?php

namespace App\Http\Controllers;

use DB;

class DateTimeController extends Controller
{

    public static function UpdateDeadline(){

        $data = DB::table('post_question_prices')
                      ->select('question_id', 'question_deadline')->get();

                    

      foreach ($data as $key => $value) {

        $deadline = self::getDeadlineInSeconds12($value->question_deadline);
        $dead = 0;

        if($deadline > 0){

          $dead = 0 ;
        }
        else 
        {
        
          $dead = 1;
        }

       // echo $dead;

        DB::table('question_matrices')->where('question_id', $value->question_id)
              ->update(
                        [
                            'overdue'   => $dead, 
                            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                        ] 
                      ); 
            }//end foreach     

      }

public static function getDeadlineInSeconds12($deadline){
   

      $TimeStart = strtotime(\Carbon\Carbon::now());

      $TimeEnd = strtotime($deadline);

      $Difference = ($TimeEnd - $TimeStart);

      return $Difference;

    }


    
}
