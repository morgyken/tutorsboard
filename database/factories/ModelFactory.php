<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    $tutor_id = DB::table('users')->select('email')->where('user_role', 'tutor')->get();

    $tutor_id = $tutor_id->toArray();

    $array_size = rand(20, 250);
   // $array = array('admin', 'tutor', 'cust');

    $active = rand(1,2);

    $ratings = rand (1,5);

    $account_level = ['new',  'advance', 'team', 'junior','admin']
    $account_level_rand = rand(0,4);
    
    return [
        'tutor_id' => $tutor_id[$array_size],
         'active' =>$active,
          'ratings' => $ratings,
          'account_level' =>$account_level[$account_level_rand]b ,
          'account_status' =>'active' ,
           'payment_account' =>'9480238493',
          'payment_method' => 'Equity',
    ];
});
