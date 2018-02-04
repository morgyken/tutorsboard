<?php

namespace App\Http\Controllers;

use DB;

use Validator;

use Illuminate\Http\Request;

use App\User;
use Storage;


use App\question_body;

use App\Controllers\QuestionController;

use Illuminate\Support\Facades\Auth;

use Input;

class UserController extends Controller
{   
    

  //view customer Controller 


  public function viewCustomerDashboard(){


    $user = Auth::User()->email;

    //check user details 

    $questions = DB::table('question_bodies')
            ->join('post_question_prices', 'question_bodies.question_id', '=', 
              'post_question_prices.question_id')
            ->leftjoin('question_matrices', 'question_matrices.question_id', '=', 'question_bodies.question_id')
            ->select('question_bodies.*','post_question_prices.*',
                'question_matrices.*')
            ->where('question_bodies.user_id', $user)

            ->orderby('question_deadline', 'desc')

            ->paginate(15);


    return view('cust.cust-dashboard-1', 
      [
        'questions' => $questions

      ]


  );
   // return view('cust.cust-dashboard');

  }


  public function ProfilePicView($view){


        if($view == 'profile'){

            return view('auth.profile-pic');

        }
        else{
            return view('auth.background-pic');
        }   

  }

   

    
    public function profilePic($pic){

      $path ='';

      $request = request();

      $type = $request->pic;

      $user_id = Auth::user()->id;

      if($pic=='profile')
            {
                $path = public_path().'/storage/uploads/profile/'.$user_id.'/profile/';
                
            }
        else
            {
               $path= public_path().'/storage/uploads/profile/'.$user_id.'/homepage/';
            }
                       

       $rules = array('file' => 'required|max:10000|mimes:png,jpg, jpeg,bmp' ); 

      $validator = Validator::make(Input::all(), $rules);

      $file = Input::file('file');

       if(is_array($file)){

             foreach ($file as $files){
                    
                  $name =  $files->getClientOriginalName();
                    
                  $files->move($path, 'profile.jpg');
                }


            }
          return redirect()->route('all-questions');
    }   

   
 
    public static function CustomerId($question, $database)
    {
        //use the qestion to get the data

           $data = DB::table($database)->where('question_id', $question)->first();

                    
           if($data !=null)
           {
             $user = DB::table('users')->where('email', $data->user_id)->first();

             return $user->id;
           }  
           else
           {
            return '';
           }   

         } 

    public static function TutorId($question, $database)
    {
        //use the qestion to get the data

           $data = DB::table($database)
           ->select('tutor_id')
           ->where('question_id', $question)->first();

            return $data->tutor_id;                   
           
    } 


    public static function CustomerEmail($question, $database)
    {
        //use the qestion to get the data

           $data = DB::table($database)->where('question_id', $question)->first();

                    
           if($data !=null)
           {
             $user = DB::table('users')->where('email', $data->user_id)->first();

             return $user->email;
           }  
           else
           {
            return '';
           }   

         }
    }
