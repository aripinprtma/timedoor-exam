<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Rating;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $authors = Author::factory(1000)->make()->toArray();
        foreach (array_chunk($authors, 500) as $chunk) {
            Author::insert($chunk);
        }

        $categories = Category::factory(3000)->make()->toArray();
        foreach (array_chunk($categories, 500) as $chunk) {
            Category::insert($chunk);
        }

        $books = Book::factory(100000)->make()->toArray();
        foreach (array_chunk($books, 1000) as $chunk) {
            Book::insert($chunk);
        }

        $ratings = Rating::factory(500000)->make()->toArray();
        foreach (array_chunk($ratings, 100000) as $chunk) {
            Rating::insert($chunk);
        }
    }
}