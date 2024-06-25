<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ParticipateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('participates')->insert([
            'id' => 1,
            'roundID' => 1,
            'contestantID' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('participates')->insert([
            'id' => 2,
            'roundID' => 1,
            'contestantID' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('participates')->insert([
            'id' => 3,
            'roundID' => 2,
            'contestantID' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
