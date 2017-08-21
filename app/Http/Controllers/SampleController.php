<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;

use App\DateTimeModel;

class SampleController extends Controller
{
    public static  function sample(){

        $question_price= DB::table('post_question_prices')->where('question_id', '=', '5RIPLnKx0Jndw1PzWOk5RFZNE')
            ->value('question_deadline');

        $deadline = Carbon::parse($question_price);

        $now = Carbon::now();
        $difference = $deadline -> diffInSeconds($now);


        $interval = DateTimeModel::ConvertTime($difference);

        echo $interval;



    }
}
