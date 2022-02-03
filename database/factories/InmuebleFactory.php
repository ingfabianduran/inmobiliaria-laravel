<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InmuebleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipo' => $this->faker->randomElement(['Arriendo', 'Venta']),
            'costo' => $this->faker->numberBetween(1000, 850000),
            'numeroPisos' => $this->faker->numberBetween(1, 3),
            'metrosCuadrados' => $this->faker->numberBetween(40, 300),
            'direccion' => $this->faker->streetAddress,
            'numeroHabitaciones' => $this->faker->numberBetween(1, 4),
            'numeroBanios' => $this->faker->numberBetween(1, 2),
            'tieneSalaComedor' => $this->faker->boolean,
            'tieneGaraje' => $this->faker->boolean,
            'estaActivo' => $this->faker->boolean,
            'barrio_id' => $this->faker->numberBetween(1, 50),
            'arrendador_id' => $this->faker->numberBetween(1, 200),
        ];
    }
}
