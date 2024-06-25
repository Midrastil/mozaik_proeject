<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('competitions')->insert([
            'name' => 'MotoGP',
            'year' => 2010,
            'winner' => 'Mark',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('competitions')->insert([
            'name' => 'Forma1',
            'year' => 2015,
            'winner' => 'Verstappen',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('competitions')->insert([
            'name' => 'Olimpics',
            'year' => 2024,
            'winner' => 'Steve',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
