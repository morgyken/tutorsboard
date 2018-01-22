<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Query\Builder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tutor_accounts')->insert([
            'tutor_id' => str_random(10),
            'active' =>integer(1),
            'ratings' => integer(10),
            'account_level' => str_random(10),
            'account_status' => str_random(10),
            'payment_account' => str_random(10),
            'payment_method' => str_random(10),
        ]);        

        factory(App\User::class, 200)->create()->each(function ($u) {
            $u->posts()->save(factory(App\Post::class)->make());
        });
    }



}
