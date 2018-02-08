<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionCategories extends Model
{
	protected $table = 'question_categories';
    protected $dateFormat = 'Y/m/d H:i:s';
    protected $connection = 'mysql';
    public $timestamps = true;
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    
    protected $fillable = ['question_id', 'user_id', 'status' ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_id', 'remember_token',
    ];
}
