<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserTableSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Call other seeders here
        $this->call(UserTableSeeder::class);
    }
}