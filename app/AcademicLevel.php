<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicLevel extends Model
{
   
    protected $table = 'academic_levels';
    protected $dateFormat = 'Y/m/d H:i:s';
    protected $connection = 'mysql';


   
    protected $fillable = [  'academic-level' ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];
}
