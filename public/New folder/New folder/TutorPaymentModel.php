<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorPaymentModel extends Model
{
   protected $table = 'suggest_price_increases';
    protected $dateFormat = 'Y/m/d H:i:s';
    protected $connection = 'mysql';

    protected $fillable = [
        
        'tutor_id', 'amount', 'payment_type',
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
