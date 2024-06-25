<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Number;
use Illuminate\Support\Str;

class ContestantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contestants')->insert([
            'id' => 1,
            'name' => Str::random(10),
            'number' => 8,
            'age' => 22,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('contestants')->insert([
            'id' => 2,
            'name' => Str::random(10),
            'number' => 11,
            'age' => 34,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('contestants')->insert([
            'id' => 3,
            'name' => Str::random(10),
            'number' => 77,
            'age' => 27,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('contestants')->insert([
            'id' => 4,
            'name' => Str::random(10),
            'number' => 19,
            'age' => 40,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
