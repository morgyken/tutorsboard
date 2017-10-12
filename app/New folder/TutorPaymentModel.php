<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorPaymentModel extends Model
{
                
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */            
            
    protected $fillable = ['tutor_id', 'amount', 'payment_type' ];

    protected $table='tutor_payment_models';

    protected $dateFormat = 'Y/m/d H:i:s';
    protected $connection = 'mysql';
    public $timestamps = true;
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'remember_token',
    ];
}
