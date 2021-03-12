<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Player extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert(
            [
                [
                    "name" => "Dos Santos",
                    "firstname" => "Leo",
                    "age" => "24",
                    "number" => "5576979708",
                    "mail" => "Leo@hotmail.com",
                    "country" => "Brésil",
                    "src" => "personne1.webp",
                    "gender_id" => 1,
                    "team_id" => 1,
                    "role_id" => 1
                ],
                [
                    "name" => "Silence",
                    "firstname" => "Julien",
                    "age" => "27",
                    "number" => "6776979708",
                    "mail" => "Julien@hotmail.com",
                    "country" => "Canada",
                    "src" => "personne2.png",
                    "gender_id" => 1,
                    "team_id" => 2,
                    "role_id" => 2
                ],
                [
                    "name" => "Demir",
                    "firstname" => "Ahmet",
                    "age" => "22",
                    "number" => "8743979708",
                    "mail" => "Ahmet@hotmail.com",
                    "country" => "Turquie",
                    "src" => "personne3.webp",
                    "gender_id" => 1,
                    "team_id" => 3,
                    "role_id" => 3
                ],
                [
                    "name" => "Turizo",
                    "firstname" => "Amelia",
                    "age" => "26",
                    "number" => "575979708",
                    "mail" => "Amelia@hotmail.com",
                    "country" => "Belgique",
                    "src" => "personne4.jpeg",
                    "gender_id" => 2,
                    "team_id" => 4,
                    "role_id" => 2
                ],
                [
                    "name" => "Van Leer",
                    "firstname" => "Aaron",
                    "age" => "24",
                    "number" => "1234979708",
                    "mail" => "Aaron@hotmail.com",
                    "country" => "Belgique",
                    "src" => "personne5.jpeg",
                    "gender_id" => 1,
                    "team_id" => 5,
                    "role_id" => 4
                ],
                [
                    "name" => "Wesh",
                    "firstname" => "Rayane",
                    "age" => "23",
                    "number" => "5576979708",
                    "mail" => "Rayane@hotmail.com",
                    "country" => "Algérie",
                    "src" => "personne6.jpeg",
                    "gender_id" => 1,
                    "team_id" => 2,
                    "role_id" => 2
                ]
            ]
        );
    }
}
