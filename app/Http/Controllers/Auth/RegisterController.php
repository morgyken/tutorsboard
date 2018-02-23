<?php

namespace App\Http\Controllers\Auth;

use App\User;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',           
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|', 
        
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        //create tutor education here 

         DB::table('tutor_education')->insert(
            [
                'tutor_id'          =>  $data['email'],         
                'created_at'        =>  \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'        =>  \Carbon\Carbon::now()->toDateTimeString()

            ]);

                //update tutor profie accounts 
        DB::table('tutor_profile')->insert(
            [
                'tutor_id'          =>  $data['email'],         
                'created_at'        =>  \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'        =>  \Carbon\Carbon::now()->toDateTimeString()

            ]);

        //update tutor ccounts

         DB::table('tutor_accounts')->insert(
            [
                'account_id'        =>  rand(89000,999999), 
                'tutor_id'          =>  $data['email'],         
                'account_status'    => 'New',
                'account_level'     => 'Beginner',
                'created_at'        =>  \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'        =>  \Carbon\Carbon::now()->toDateTimeString()

            ]);

        
    
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'user_role' => $data['user_role']
            
        ]);



        
    }

}
