<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostQuestionPrice extends Model
{

    protected $table = 'post_question_prices';
    protected $dateFormat = 'Y/m/d H:i:s';
    protected $connection = 'mysql';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $fillable = [
        'question_id', 'question_price','question_deadline',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'question_id', 'remember_token',
    ];
}
