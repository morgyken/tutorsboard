<?php

namespace App\Http\Controllers;

use DB;

use Validator;

use Illuminate\Http\Request;

use App\User;
use Storage;


use App\question_body;

use Illuminate\Support\Facades\Auth;

use Input;

class UserController extends Controller
{
    
	public function ProfilePicView(){

		return view('auth.file-upload-2');

	}

    
    public function fileUpload(){

        $request = request();

    	$type = $request->pic;

		$user_id = Auth::user()->id;

    	if($type =='profile'){    		

    		$path= public_path().'/storage/uploads/profile/'.$user_id.'/homepage/';
    		
    	}
    	else{
    		$path = public_path().'/storage/uploads/profile/'.$user_id.'/profile/';
    	}
    	

    	$rules = array('file' => 'required|max:10000|mimes:png,jpg, jpeg,bmp' ); 

    	$validator = Validator::make(Input::all(), $rules);

    	$file = Input::file('file');


    	   	    
            if(is_array($file)){

             foreach ($file as $files){
                    /*
                     * loop through multiple files 
                     */
                    $name =  $files->getClientOriginalName();
                    
                    $files->move($path, 'profile.jpg');
                }

            }
    }   

}
