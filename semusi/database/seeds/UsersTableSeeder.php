<?php

use Illuminate\Database\Seeder;
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
        User::create([
            'name'      =>      'Rishabh Agrawal',
            'email'     =>      'rishabhagrawal495@gmail.com',
            'password'  =>      Hash::make('password'),
            'remember_token'=>  str_random(10),    
        ]);
    }
}
