<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $authorIds = factory(App\Author::class, 5)->create()->pluck('id')->toArray();
        $genreIds = factory(App\Genre::class, 5)->create()->pluck('id')->toArray();

        $books = factory(App\Book::class, 50)->make()->each(function ($book) use ($authorIds, $genreIds) {
            $book->author_id = Arr::random($authorIds);
            $book->genre_id = Arr::random($genreIds);
        })->toArray();

        App\Book::insert($books);
    }
}
