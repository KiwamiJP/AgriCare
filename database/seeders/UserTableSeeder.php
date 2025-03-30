<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Admin",
            'email' => 'admin@gmail.com',
            'password' => 'password', // This will trigger the setPasswordAttribute method
            'role' => 'admin',
        ]);

        User::create([
            'name' => "User",
            'email' => 'user@gmail.com',
            'password' => 'password', // This will trigger the setPasswordAttribute method
            'role' => 'farmer',
        ]);
    }
}
