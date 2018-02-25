<?php

use App\User;
use Bican\Roles\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->delete();

        $adminRole = Role::create([
            'name' => 'Administrator',
            'slug' => 'admin',
        ]);

        $admin_user = User::where('email', '=', 'admin@swiftrend.com')->first();
        $admin_user->attachRole($adminRole);

        $account_client = Role::create([
            'name' => 'Customer',
            'slug' => 'client'
        ]);

        $account_manager = User::where('email', '=', 'customer@swiftrend.com')->first();
        $account_manager->attachRole($account_client);
    }
}
