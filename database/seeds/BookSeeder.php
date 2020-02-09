<?php

use Illuminate\Database\Seeder;
use App\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'title' => 'True Love',
                'author' => 'Bill Underwood',
                'genre' => 'Romantic',
                'price' => 234.45,
                'description' => 'After school, Kamal took the girls to the old house. It was very old and very dirty too. There was rubbish everywhere. The windows were broken and the walls were damp. It was scary.',
            ],
            [
                'title' => 'There and Back',
                'author' => 'Hobbit Frodo',
                'genre' => 'Fantasy',
                'price' => 156.77,
                'description' => 'Amy normally hated Monday mornings, but this year was different. Kamal was in her art class and she liked Kamal. She was waiting outside the classroom when her friend Tara arrived.',
            ],
            [
                'title' => 'Hobbit',
                'author' => 'Sauron Evil Guy',
                'genre' => 'Detective',
                'price' => 678.98,
                'description' => 'Reading is the best way to improve your vocabulary! The context of articles, stories, and conversations helps you figure out and understand the meaning of English words in the text that are new to you. Reading also provides repetition of vocabulary words you have already learned to help you remember them.',
            ],
            [
                'title' => 'Love and Flowers',
                'author' => 'Hobbit Frodo',
                'genre' => 'Fantasy',
                'price' => 478.09,
                'description' => ' It is not made of silicon; and it is not a river valley; but forgetting that, Silicon Valley is probably the most famous valley in the world. Although it is not the place where the first computer was built (that was Manchester, England), Silicon Valley, near San Francisco, was the birthplace of the modern computer industry.',
            ],
            [
                'title' => 'Dragon Age',
                'author' => 'Nill Armstrong',
                'genre' => 'Comedy',
                'price' => 388.99,
                'description' => 'When they finished university, many of the best students did not look for jobs with big companies like Ford or Exxon. Instead they wanted to be free and run their own operations and stay in California, not far from San Francisco. Silicon Valley is thus a group of small towns, including Palo Alto and San José, a few miles south of San Francisco.',
            ],
            [
                'title' => 'Sherlock Holmes',
                'author' => 'Agata Freesby',
                'genre' => 'Detective',
                'price' => 445.99,
                'description' => 'Instead they wanted to be free and run their own operations and stay in California, not far from San Francisco. Silicon Valley is thus a group of small towns, including Palo Alto and San José, a few miles south of San Francisco.',
            ],
            [
                'title' => 'World Of Tanks',
                'author' => 'Noob Shutter',
                'genre' => 'Comedy',
                'price' => 338.99,
                'description' => 'Silicon Valley is thus a group of small towns, including Palo Alto and San José, a few miles south of San Francisco.',
            ],
            [
                'title' => 'Harry Plotter',
                'author' => 'Joanna Bouling',
                'genre' => 'Fantasy',
                'price' => 999.99,
                'description' => 'Many of the best students of Hogwarts did not look for jobs with big companies like Ford or Exxon. Instead they wanted to be free and run their own operations and stay in California, not far from San Francisco. Silicon Valley is thus a group of small towns, including Palo Alto and San José, a few miles south of San Francisco.',
            ],
        ];

        foreach ($books as $book) {
            Book::create(array(
                'title' => $book['title'],
                'author' => $book['author'],
                'genre' => $book['genre'],
                'price' => $book['price'],
                'description' => $book['description'],
            ))->paginate(5);
        }
    }
}
