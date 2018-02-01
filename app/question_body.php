<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question_body extends Model
{
    protected $table = 'question_bodies';
    protected $dateFormat = 'Y/m/d H:i:s';
    protected $connection = 'mysql';
    public $timestamps = true;


    public function testDatabase()
    {
        //$Question = factory(App\PostQuestionModel::class)->create();
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
    protected $fillable = [
        'question_body', 'question_id', 'summary',
            'user_id', 'summary', 'username','category','topic'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_id', 'remember_token',
    ];




}
