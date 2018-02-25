<?php

use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        
        User::create(['email' => 'admin@swiftrend.com' , 'fname' => 'Stella','lname' => 'Ingabire', 'password' => Hash::make('admin'), 'phone' => '+250786160780']);

        User::create(['email' => 'customer@swiftrend.com', 'fname' => 'Eric','lname' => 'Ku', 'password' => Hash::make('customer'), 'phone' => '+250788355919']);

    }
}
