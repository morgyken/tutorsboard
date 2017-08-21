<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Query\Builder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        factory(App\User::class, 300)->create()->each(function ($u) {
            $u->posts()->save(factory(App\Post::class)->make());
        });
    }



}
