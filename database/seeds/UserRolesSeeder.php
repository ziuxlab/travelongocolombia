<?php

use Illuminate\Database\Seeder;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \HttpOz\Roles\Models\Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => 'Custodians of the system.', // optional
        ]);
	
	    \HttpOz\Roles\Models\Role::create([
		    'name' => 'Hotel',
		    'slug' => 'hotel',
	    ]);
    
        \HttpOz\Roles\Models\Role::create([
            'name' => 'User',
            'slug' => 'user',
        ]);
    }
}
