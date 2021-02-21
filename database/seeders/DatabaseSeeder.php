<?php

namespace Database\Seeders;

use App\Models\role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Admin', 'Teacher', 'Student', 'Support', 'Secretary'];

        foreach ($roles as $role){
            role::create([
                'name' => $role
            ]);
        }

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '0100000000',
            'password' => Hash::make('12345678'),
            'role_id' => 1
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
