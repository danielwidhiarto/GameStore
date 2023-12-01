<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = [
            [
                "id" => "1",
                "genre_name" => "RPG",
            ],
            [
                "id" => "2",
                "genre_name" => "FPS",
            ],
            [
                "id" => "3",
                "genre_name" => "Open World",
            ],
            [
                "id" => "4",
                "genre_name" => "MMORPG",
            ],
            [
                "id" => "5",
                "genre_name" => "Survival",
            ],
        ];

        foreach ($genres as $genre) {
            Genre::insert($genre);
        }
    }
}
