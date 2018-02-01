<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorPaymentBonuses extends Model
{
    protected $table = 'tutor_bonuses';
    protected $dateFormat = 'Y/m/d H:i:s';
    protected $connection = 'mysql';

    protected $fillable =[
    						'order_id', 'tutor_id', 'payment_id', 
    						'paid_by', 'order_summary', 'status', 'amount' 
    						];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'tutor_id', 'remember_token',
    ];
}