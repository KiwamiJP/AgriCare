<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
              // Set the role to 'admin' for a specific user
              User::where('email', 'admin@gmail.com')->update(['role' => 'admin']);

              // Optionally, set the role to 'user' for all other users
              User::where('role', '')->update(['role' => 'user']);
    }
}
