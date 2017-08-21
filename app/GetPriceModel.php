<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GetPriceModel extends Model
{
    public static  function index($question_id){
        $question_price= PostQuestionPrice::where('question_id', '=', $question_id)->firstOrFail();
        return $question_price->question_price;
    }
}
