<?php

use Illuminate\Database\Seeder;
use App\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = [
            [
                'name' => 'Bill Underwood',
            ],
            [
                'name' => 'Uli Laursen',
            ],
            [
                'name' => 'Hobbit Frodo',
            ],
            [
                'name' => 'Sauron Evil Jr.',
            ],
            [
                'name' => 'Pumpkin Head',
            ],
        ];

        foreach ($authors as $author) {
            Author::create(array(
                'name' => $author['name'],
            ));
        }
    }
}
