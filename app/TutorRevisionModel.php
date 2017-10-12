<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorRevisionModel extends Model
{
     protected $table = 'revisions';
    protected $dateFormat = 'Y/m/d H:i:s';
    protected $connection = 'mysql';

    protected $fillable = [
        'tutor_id', 'revision_id', 'question_id',
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


