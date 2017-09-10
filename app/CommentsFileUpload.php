<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentsFileUpload extends Model
{
    protected $table = 'comment_fileuploads';
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
        'question_id', 'comment_id', 'filename',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'question_id', 'remember_token',
    ];
}
