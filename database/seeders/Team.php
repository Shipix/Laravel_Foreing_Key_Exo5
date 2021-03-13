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
                    "equipe" => "AllBlack",
                    "country_id" => 1,
                    "number" => 7
                ],
                [
                    "equipe" => "WestStar",
                    "country_id" => 5,
                    "number" => 7
                ],
                [
                    "equipe" => "Kings",
                    "country_id" => 3,
                    "number" => 8
                ],
                [
                    "equipe" => "Bucks",
                    "country_id" => 2,
                    "number" => 8
                ],
                [
                    "equipe" => "Circle",
                    "country_id" => 4,
                    "number" => 8
                ],
            ]
        );
    }
}
