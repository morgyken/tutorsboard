<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostQuestionModel extends Model
{

    protected $table = 'question_bodies';
    protected $dateFormat = 'Y/m/d H:i:s';
    protected $connection = 'mysql';
    public $timestamps = true;
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function testDatabase()
    {
        //$Question = factory(App\PostQuestionModel::class)->create();
    }

    protected $fillable = [
        'question_body', 'question_id', 'summary',
        'user_id', 'special','category',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_id', 'remember_token',
    ];

//
}
