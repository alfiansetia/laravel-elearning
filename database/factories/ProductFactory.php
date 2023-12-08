<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'          => $this->faker->name(),
            'price'         => $this->faker->randomNumber(mt_rand(2, 3)),
            'detail'        => $this->faker->paragraph(mt_rand(5, 10)),
            'photo'         => $this->faker->imageUrl(640, 480),
            'category_id'   => $this->faker->numberBetween(1, 2),
            'user_id'       => $this->faker->unique()->numberBetween(1, 8),
        ];
    }
}
