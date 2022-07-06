<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tareas>
 */
class TareasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'placa' => $this->faker->name(),
            'tipovehiculo' => $this->faker->lastName(),
            'modelo' => $this->faker->unique('smallint'),
            'precioreferencia'=>$this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
            'estado'=>$this->faker->randomElement(['descuento', 'normal', 'multa']),
            //
        ];
    }
}
