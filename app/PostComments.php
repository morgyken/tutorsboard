<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostComments extends Model
{
    protected $database = 'post_comments';
    protected $dateFormat = 'Y/m/d H:i:s';
    protected $connection = 'mysql';

    protected $fillable = [
        'user_id', 'question_id', 'comment_body', 'message_type' ,'post_date',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_id', 'remember_token',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'post_date'
    ];

    public function QuestionFileupload(){

        return $this->hasMany( QuestionFileupload::Class);

    }

}
