<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert(
            [
                [
                    "country" => "Belgique",
                    "continent" => "Europe"
                ],
                [
                    "country" => "Canada",
                    "continent" => "Amérique du Nord"
                ],
                [
                    "country" => "Algérie",
                    "continent" => "Afrique"
                ],
                [
                    "country" => "Turquie",
                    "continent" => "Asie"
                ],
                [
                    "country" => "Brésil",
                    "continent" => "Amérique du Sud"
                ],
                [
                    "country" => "",
                    "continent" => ""
                ],
                [
                    "country" => "",
                    "continent" => "Océanie"
                ],
            ]
        );

    }
}
