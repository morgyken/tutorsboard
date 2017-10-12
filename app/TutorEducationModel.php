<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorEducationModel extends Model
{
    protected $table = 'tutor_education_models';
    protected $dateFormat = 'Y/m/d H:i:s';
    protected $connection = 'mysql';

    protected $fillable = [
        'tutor_id', 'college', 'expertise',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'id', 'remember_token',
    ];
} 