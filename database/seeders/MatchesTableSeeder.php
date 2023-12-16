<?php

namespace Database\Seeders;

// database/seeders/MatchesTableSeeder.php
use Illuminate\Database\Seeder;
use \App\Models\Matche;
use App\Models\Match;

class MatchesTableSeeder extends Seeder
{
    public function run()
    {
        Matche::factory(10)->create(); 
    }
}
