<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentRequest extends Model
{
    protected $table = 'paid_questions';

    protected $dateFormat = 'Y/m/d H:i:s';
    protected $connection = 'mysql';


    protected $fillable = [
        'user_id', 'question_id' ,'answer_body','answered', 'overdue',
    ];


    protected $hidden = [
        'userid', 'remember_token',
    ];

}
