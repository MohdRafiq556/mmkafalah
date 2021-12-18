<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
           'type' => 'admin',
            'name' => 'Admin'
        ]);

        Role::create([
            'type' => 'staff',
            'name' => 'staff'
        ]);

        Role::create([
            'type' => 'wakil_syarikat',
            'name' => 'Wakil Syarikat'
        ]);

        User::create([
            'name' => 'Admin Full Name Here',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin@1999'),
            'phone_number' => '019-9912122',
            'address' => 'address admin',
            'avatar' => '1639575626.JPG',
            'role_id' => 1
        ]);

        User::create([
            'name' => 'Staff Full Name Here',
            'email' => 'staff@gmail.com',
            'password' => bcrypt('staff@1999'),
            'phone_number' => '019-9912122',
            'address' => 'address staff',
            'avatar' => '1639575626.JPG',
            'role_id' => 2
        ]);
    }
}
