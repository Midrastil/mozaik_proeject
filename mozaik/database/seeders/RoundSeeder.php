<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rounds')->insert([
            'id' => 1,
            'name' => 'Hungarian GP',
            'maxContestant' => 20,
            'winner' => 'John',
            'competitionName' => 'Forma1',
            'competitionYear' => 2015,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('rounds')->insert([
            'id' => 2,
            'name' => '	Monaco GP',
            'maxContestant' => 24,
            'winner' => 'Dave',
            'competitionName' => 'Forma1',
            'competitionYear' => 2015,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('rounds')->insert([
            'id' => 3,
            'name' => 'Finals',
            'maxContestant' => 8,
            'winner' => Str::random(10),
            'competitionName' => 'Olimpics',
            'competitionYear' => 2024,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
