<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorRefundsModel extends Model
{
    protected $table = 'refunds_models';
    protected $dateFormat = 'Y/m/d H:i:s';
    protected $connection = 'mysql';

    protected $fillable = [
        'tutor_id', 'refund_id', 'amount',
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

