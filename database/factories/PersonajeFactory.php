<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonajeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombreCompleto' => $this->faker->name(),
            'foto' => $this->faker->imageUrl(),
        ];
    }
}
