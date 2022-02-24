<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FraseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'frase' => $this->faker->sentence(),
            'calificacion' => $this->faker->numberBetween(0, 5)
        ];
    }
}
