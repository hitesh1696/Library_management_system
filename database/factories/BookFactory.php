<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText($maxNbChars = 20, $indexSize = 2),
            'author' => $this->faker->name(),
            'publisher' => $this->faker->company(),
            'price' => rand(299,599),
            'no_of_copies' => rand(10,40),
            'in_stock' => rand(10,40),
        ];
    }
}
