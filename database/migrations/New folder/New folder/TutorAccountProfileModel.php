<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorAccountProfileModel extends Model
{
    protected $table = 'tutor_account_profile_models';
    protected $dateFormat = 'Y/m/d H:i:s';
    protected $connection = 'mysql';

    protected $fillable = [
        'tutor_id', 'writerlevel', 'paypal','ratings', 'mpesaline' ];

  
}

