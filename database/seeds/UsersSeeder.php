<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
        	'id' => 1,
        	'name' => 'Pablo',
        	'email' => 'hi@hi.com',
        	'password' => '123456'
        ]);

        User::create([
        	'id' => 2,
        	'name' => 'Cesar',
        	'email' => 'hg@gmail.com',
        	'password' => 'asdf'
        ]);

        User::create([
        	'id' => 3,
        	'name' => 'Marco',
        	'email' => 'hss@hotmail.com',
        	'password' => 'admi123'
        ]);
    }
}
