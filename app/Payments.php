<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $table = 'payment_models';

    protected $dateFormat = 'Y/m/d H:i:s';
    protected $connection = 'mysql';


    protected $fillable = [
        'quesion_id', 'withdrawal_id' ,'user_id','status', 'amount',
    ];


    protected $hidden = [
        'question_id', 'remember_token',
    ];

}
