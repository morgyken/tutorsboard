<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdmQLoader(){
        return view ('adm.allQuestions');
    }

    public function AdmTutors(){

        $user = DB::table('users')->paginate(25);

        return view ('adm.allTutors',['users'=> $user ] );

    }

    public function AdmPayments(){
        return view ('adm.payments');
    }

    public function AdmProfile(){
        return view ('adm.profile');
    }

    public function AdmDashboard(){
        return view ('adm.index-admin');
    }

}
