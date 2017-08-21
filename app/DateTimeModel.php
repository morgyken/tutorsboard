<?php

namespace App;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent;
use DB;

use Illuminate\Database\Eloquent\Model;

class DateTimeModel extends Model
{
    public static  function ConvertTime( $seconds){

        $dtF = new \DateTime('@0');
        $dtT = new \DateTime("@$seconds");

        $days =  $dtF->diff($dtT)->format('%a');

        if($days> 0){
            return $dtF->diff($dtT)->format('%a days %h hours');
        }
        else {
              return $dtF->diff($dtT)->format('%h hours %i min');
        }



    }


    public static  function getDeadlineInSeconds($question_id){

        $question_price= DB::table('post_question_prices')->where('question_id', '=', $question_id)
            ->value('question_deadline');

        $deadline = Carbon::parse($question_price);

        $now = Carbon::now();
        $difference = $deadline -> diffInSeconds($now);


        $interval = DateTimeModel::ConvertTime($difference);

        return $interval;

    }

}
