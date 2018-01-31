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
        $data = User::select('user_role')->get();


        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'user_role' => str_random(10),
        ]);

        

        factory(App\User::class, 100)->create()->each(function ($u) {
            $u->posts()->save(factory(App\Post::class)->make());
        });
    }



}
