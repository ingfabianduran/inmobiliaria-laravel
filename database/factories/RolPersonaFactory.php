<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RolPersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rol' => $this->faker->randomElement(['Arrendador', 'Arrendatario']),
            'persona_id' => $this->faker->numberBetween(1, 200),
        ];
    }
}
