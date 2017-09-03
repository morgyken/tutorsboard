<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionStatusModel extends Model
{
    protected $table = 'question_status_models';
    
    protected $dateFormat = 'Y/m/d H:i:s';
    protected $connection = 'mysql';


    protected $fillable = [

        'user_id', 'question_id', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_id', 'remember_token',
    ];

    protected $dates = [
        'created_at',
        'updated_at',

    ];

}
