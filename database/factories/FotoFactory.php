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
            'inmueble_id' => $this->faker->numberBetween(1, 100)
        ];
    }
}
