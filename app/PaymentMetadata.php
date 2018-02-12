<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMetadata extends Model
{
  protected $table = 'payment_metadata';

  protected $dateFormat = 'Y/m/d H:i:s';
  protected $connection = 'mysql';


  protected $fillable = [
      'name', 'email' ,'country','city', 'state', 'zip', 'amount', 'customer_id', 'token'
  ];


  protected $hidden = [
      'user_id', 'remember_token',
  ];
}
