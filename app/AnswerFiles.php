<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswerFiles extends Model
{
    protected $table = 'answer_files';
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
        'answer_id', 'file_name', 'file_path'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'answer_id', 'remember_token',
    ];
}
