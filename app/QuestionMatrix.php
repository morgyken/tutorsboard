<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionMatrix extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['question_id', 'current', 'reassigned','completed' ,'rated','revision' ];

    protected $table='users';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function question_body()
    {
        return $this->hasMany('App\Comment', 'user_id', 'email');

    }
}
