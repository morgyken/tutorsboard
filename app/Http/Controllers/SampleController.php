<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;

use App\DateTimeModel;

class SampleController extends Controller
{
    public static  function sample(){

        $user = DB::table('users')->paginate(25);

        return view('adm.questions', ['users'=> $user ]);
    }
}
