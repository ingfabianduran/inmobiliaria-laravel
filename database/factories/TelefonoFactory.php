<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TelefonoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipo' => $this->faker->randomElement(['Celular', 'Fijo']),
            'numero' => $this->faker->numberBetween(1000000, 9999999999),
            // 'persona_id' => $this->faker->numberBetween(1, 200),
        ];
    }
}
