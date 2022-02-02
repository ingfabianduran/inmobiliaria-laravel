<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombres' => $this->faker->firstName,
            'apellidos' => $this->faker->lastName,
            'numeroDocumento' => $this->faker->numberBetween(1000000000, 9999999999),
            'direccion' => $this->faker->address,
            'correoElectronico' => $this->faker->email
        ];
    }
}
