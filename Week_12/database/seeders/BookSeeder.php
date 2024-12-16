<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run()
    {
        Book::create(['author_id' => 1, 'category_id' => 1, 'title' => '1984', 'description' => 'Dystopian novel set in totalitarian society.', 'price' => 15.99]);
        Book::create(['author_id' => 2, 'category_id' => 1, 'title' => 'Pride and Prejudice', 'description' => 'A romantic novel.', 'price' => 9.99]);
    }
}
