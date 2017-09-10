<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $table = 'payment_models';

    protected $dateFormat = 'Y/m/d H:i:s';
    protected $connection = 'mysql';


    protected $fillable = [
        'user_id', 'question_id' ,'answer_body','answered', 'overdue',
    ];


    protected $hidden = [
        'userid', 'remember_token',
    ];

}
