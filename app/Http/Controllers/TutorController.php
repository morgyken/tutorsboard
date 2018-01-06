<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

use App\User;

use App\TutorAccount;

use Exception;

use Illuminate\Database\MySqlConnection;

use App\question_body;

use Illuminate\Support\Facades\Auth;

class TutorController extends Controller
{
    
    public function getTutProfile()
    {        
         //signel select helper

        $this->singleSelectHelper();

        //return tutor top profile
        $data = DB::table('tutor_profile')->where('tutor_id', Auth::user()->email)->firstOrFail();


        //return tutor education
        $data2 = DB::table('tutor_education')->where('tutor_id', Auth::user()->email)->firstOrFail();  

       return view ('adm.show-tutor-profile', ['data'=> $data, 'education' => $data2]);              
     }
     

//post tutor profile
     public function postTutProfile(Request $request)
    { 

        //post tutor profile
        DB::table('tutor_profile')->where('tutor_id', Auth::user()->email)
            ->update(
                [    
                                  
                    'firstname'     => $request->firstname,
                    'lastname'      => $request->lastname,
                    'skype'         => $request->skype,
                    'phoneno'       => $request->phoneno,
                    'town'          => $request->town,
                    'county'        =>$request->county,
                    'created_at'    =>\Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at'    => \Carbon\Carbon::now()->toDateTimeString(),
                ]);

                   

        return redirect()->route('tut-profile');
        } 


    public function getTutProgress()
    {    
        

        return view ('adm.show-tut-progress-det');

    }
     

//post tutor profile
     public function postTutProgress(Request $request)
    { 
        

    }

         //post tutor profile
     public function postTutEducation(Request $request)
    { 
        //post education profile
            DB::table('tutor_education')->where('tutor_id', Auth::user()->email)
            ->update(
                [    
                                  
                    'highschool'   => $request->highschool,
                    'college'      => $request->college,
                    'areaofstudy'  => $request->areaofstudy,
                    'language'     => $request->language,

                    'created_at'   =>\Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                ]);

             return redirect()->route('tut-profile');

        
    }

    //function to help in selecting single column 
    public function singleSelectHelper(){

        return DB::query()->macro('firstOrFail', function () {
            if ($record = $this->first()) {

                return $record;
        }

            throw new Exception('No records found');
        });
    }

    public function getTutAccount()
    {    
        $this->singleSelectHelper();  
        

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
