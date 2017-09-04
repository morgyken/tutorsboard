<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnassignedQuestions extends Model
{
    protected $table = 'unassign_question';
    protected $dateFormat = 'Y/m/d H:i:s';
    protected $connection = 'mysql';

    protected $fillable = [
        'user_id', 'question_id', 'suggested_price',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'user_id', 'remember_token',
    ];
}
