<?php

namespace Database\Seeders;

use App\Models\Fixture;
use Illuminate\Database\Seeder;

class FixtureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fixture::create(
            [
                'id'            =>  1,
                'group_name'    =>  'Group A',
                'home'          =>  24,
                'away'          =>  10,
                'time'          => '2022-11-20',  
            ]
            );
        Fixture::create(
            [
                'id'            =>  2,
                'group_name'    =>  'Group B',
                'home'          =>  11,
                'away'          =>  15,
                'time'          => '2022-11-21',  
            ]
            );
        Fixture::create(
            [
                'id'            =>  3,
                'group_name'    =>  'Group B',
                'home'          =>  26,
                'away'          =>  20,
                'time'          => '2022-11-21',  
            ]
            );
    }
}
