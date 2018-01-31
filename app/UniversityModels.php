<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UniversityModels extends Model
{
    protected $table = 'university_models';
    protected $dateFormat = 'Y/m/d H:i:s';
    protected $connection = 'mysql';

    protected $fillable = [
        'university_name', 'country', 'state' ];

  /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'id', 'remember_token',
    ];
}
