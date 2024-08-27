<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // Import the Hash facade

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'alanbrito',
            'email' => 'alanbrito@example.com', // Make sure the email is valid
            'password' => Hash::make('alanbrito')
        ]);
    }
}
