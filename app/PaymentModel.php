<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentModel extends Model
{   use Notifiable;

/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['question_id','paid','user_id' ];
    protected $table='users';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
      'remember_token',
    ];
}
