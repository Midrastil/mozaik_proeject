<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            'id' => 1,
            'name' => 'admin',
            'email' =>'admin@admin.com',
            'isAdmin' => '1',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'name' => 'test1',
            'email' =>'test1@gmail.com',
            'isAdmin' => '0',
            'email_verified_at' => now(),
            'password' => Hash::make('password1'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'test2',
            'email' => 'test2@gmail.com',
            'isAdmin' => '0',
            'email_verified_at' => now(),
            'password' => Hash::make('password2'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
