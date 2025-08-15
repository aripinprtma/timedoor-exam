<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author_id'   => Author::inRandomOrder()->value('id') ?? Author::factory(),
            'category_id' => Category::inRandomOrder()->value('id') ?? Category::factory(),
            'title'       => $this->faker->text(20)
        ];
    }
}