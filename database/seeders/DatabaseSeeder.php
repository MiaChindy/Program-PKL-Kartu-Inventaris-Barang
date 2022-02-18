<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'Leonard',
            'email' => 'los@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'Admin'
        ]);
    }
}
