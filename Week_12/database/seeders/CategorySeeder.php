<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Fiction', 'description' => 'Fictional books and novels.']);
        Category::create(['name' => 'Science Fiction', 'description' => 'Sci-Fi books.']);
    }
}

