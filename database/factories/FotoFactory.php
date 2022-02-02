<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => $this->faker->imageUrl(),
            'publicId' => $this->faker->numberBetween(10000, 99999),
            'inmueble_id' => $this->faker->numberBetween(1, 100)
        ];
    }
}
