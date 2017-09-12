<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentRequest extends Model
{
    protected $table = 'payment_requests';

    protected $dateFormat = 'Y/m/d H:i:s';
    protected $connection = 'mysql';


    protected $fillable = [
        'user_id', 'request_id' ,'amount','user_id', 'statu',
    ];


    protected $hidden = [
        'user_id', 'remember_token',
    ];

}
