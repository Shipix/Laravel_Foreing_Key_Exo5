<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Team extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert(
            [
                [
                    "name" => "AllBlack",
                    "country_id" => 1,
                    "number" => 7
                ],
                [
                    "name" => "WestStar",
                    "country_id" => 5,
                    "number" => 7
                ],
                [
                    "name" => "Kings",
                    "country_id" => 3,
                    "number" => 8
                ],
                [
                    "name" => "Bucks",
                    "country_id" => 2,
                    "number" => 8
                ],
                [
                    "name" => "Circle",
                    "country_id" => 4,
                    "number" => 8
                ],
            ]
        );
    }
}
