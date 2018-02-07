<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionViews extends Model
{
    protected $table = 'page_views';

    // As a best practice, always set up the fillable property on your model!
    protected $fillable = [ 'title', 'content' ];
}
