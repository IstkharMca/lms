<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->insert([
            'name' =>'Admin',
            'username' => 'admin',
            'email' => 'admin@yopmail.com',
            'password' => \Hash::make('1111'),
            'role' => 'admin',
            'status' => 1
        ]);

        \DB::table('users')->insert([
            'name' =>'Instructor',
            'username' => 'instructor',
            'email' => 'instructor@yopmail.com',
            'password' => \Hash::make('1111'),
            'role' => 'instructor',
            'status' => 1
        ]);

        \DB::table('users')->insert([
            'name' =>'User',
            'username' => 'user',
            'email' => 'user@yopmail.com',
            'password' => \Hash::make('1111'),
            'role' => 'user',
            'status' => 1
        ]);
    }
}
