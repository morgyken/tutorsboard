<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

use App\User;

use App\TutorAccount;

use Illuminate\Database\MySqlConnection;

use App\question_body;

use Illuminate\Support\Facades\Auth;

class TutorController extends Controller
{
    
    public function getTutProfile()
    {        
        return view ('adm.show-tutor-profile');

    }
     

//post tutor profile
     public function postTutProfile(Request $request)
    { 
        

    }


    public function getTutProgress()
    {        
        return view ('adm.show-tut-progress');

    }
     

//post tutor profile
     public function postTutProgress(Request $request)
    { 
        

    }

    public function getTutAccount()
    {    
       //sample single row query with Query Builder to return the datas

       // $data = DB::table('tutor_accounts')->where('tutor_id', Auth::user()->email)->get(); 

        DB::query()->macro('firstOrFail', function () {
            if ($record = $this->first()) {

                return $record;
        }

            throw new Exception('No records found');
        });

        $data = DB::table('tutor_accounts')->where('tutor_id', Auth::user()->email)->firstOrFail();

       

     return view ('adm.show-tut-account-det', ['data'=> $data]);

    }
     

//update tutor profile, the post is done during registration
     public function postTutAccount(Request $request)
    { 
        DB::table('tutor_accounts')->where('tutor_id', Auth::user()->email)
            ->update(
                [
                    'payment_method' => $request->payment_method, 
                    'payment_account' =>$request->payment_account,                       
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                ]
         );
        return redirect()->route('tut-account');

    }
     
     
     


}
