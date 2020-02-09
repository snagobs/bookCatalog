<?php

use App\Genre;
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
                'name' => 'Detective',
            ],
            [
                'name' => 'Fantastic',
            ],
            [
                'name' => 'Fantasy',
            ],
            [
                'name' => 'Drama',
            ],
        ];

        foreach ($genres as $genre) {
            Genre::create(array(
                'name' => $genre['name'],
            ));
        }
    }
}
