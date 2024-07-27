<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Asep Septiadi',
            'email' => 'devadiroot@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),
            'role_access' => 'administrator'
        ]);
    }
}
