<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proyecto>
 */
class ProyectoFactory extends Factory
{

   // Define the model's default state. Returns array<string, mixed>

   public function definition()
   {
      return [
         'nombreProyecto' => $this->faker->words(),
         'fuenteFondos' => $this->faker->words(),
         'montoPlanificado' => $this->faker->randomFloat(),
         'montoPatrocinado' => $this->faker->randomFloat(),
         'montoFondosPropios' => $this->faker->randomFloat()
      ];
   }
}
