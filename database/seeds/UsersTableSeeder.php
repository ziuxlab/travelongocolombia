<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // 1. query the Roles by the slug
        $adminRole = \HttpOz\Roles\Models\Role::whereSlug('admin')->first();
    
        // 2a. Create admin
        $admin = \App\User::create([
            'name' => 'Administrador',
            'email' => 'admin@ziuxlab.com',
            'password' => bcrypt('caremico')
        ]);
    
        
        // 3. Attach a role to the user object / assign a role to a user
        $admin->attachRole($adminRole);
       
    }
}
