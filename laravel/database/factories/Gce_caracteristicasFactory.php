<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Gce_caracteristicasFactory extends Factory
{
    public function definition(): array
    {
        return [
            'gce_nombre_equipo' => $this->faker->name(),
            'gce_board' => $this->faker->name(),
            'gce_case' => $this->faker->randomDigit(),
            'gce_procesador' => $this->faker->sentence(),
            'gce_grafica'=> $this->faker->randomDigit(),
            'gce_ram' => $this->faker->randomDigit(),
            'gce_disco_duro' => $this->faker->randomDigit(),
            'gce_teclado' => $this->faker->name(),
            'gce_mouse' => $this->faker->name(),
            'gce_pantalla' => $this->faker->numberBetween(0, 100),
            'gce_estado' => $this->faker->numberBetween(0,1),
        ];
    }
}
