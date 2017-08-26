<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdmQLoader(){
        return view ('adm.allQuestions');
    }

    public function AdmTutors(){
        return view ('adm.allTutors');
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
