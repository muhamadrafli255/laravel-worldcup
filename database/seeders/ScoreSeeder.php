<?php

namespace Database\Seeders;

use App\Models\Score;
use Illuminate\Database\Seeder;

class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Score::create(
            [
                'id'            =>  1,
                'fixture_id'    =>  1,
                'home'          =>  0,
                'away'          =>  2,
            ]
            );
        Score::create(
            [
                'id'            =>  2,
                'fixture_id'    =>  2,
                'home'          =>  6,
                'away'          =>  2,
            ]
            );
        Score::create(
            [
                'id'            =>  3,
                'fixture_id'    =>  3,
                'home'          =>  0,
                'away'          =>  2,
            ]
            );
    }
}
