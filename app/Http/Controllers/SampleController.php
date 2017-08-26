<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;

use App\DateTimeModel;

class SampleController extends Controller
{
    public static  function sample(){

        return view('adm.questions');
    }
}
