<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LateSubmissionsModel extends Model
{
   protected $table = 'latesubmissions_models';
    protected $dateFormat = 'Y/m/d H:i:s';
    protected $connection = 'mysql';

    protected $fillable = [
        'tutor_id', 'question_id',
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



 