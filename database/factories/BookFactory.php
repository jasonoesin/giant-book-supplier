<?php

namespace Database\Factories;

use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    public function definition()
    {
        $publisher_ids = Publisher::pluck('id')->toArray();

        // Generate Random Publisher ID
        return [
            'year'=> rand(2000,2020),
            'publisher_id' => $this->faker->randomElement($publisher_ids),
            'author' => $this->faker->name,
        ];
    }
}
