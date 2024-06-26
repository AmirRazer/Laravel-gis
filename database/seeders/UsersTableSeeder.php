<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        'name' => 'Admin',
        'email' => 'amir@gmail.com',
        'password' => Hash::make('1234567890'), // pastikan untuk meng-hash password
        'role_id' => 2,
    ]);
    }
}
