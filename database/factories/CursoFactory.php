<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    protected $model = Curso::class;

    public function definition()
    {
        $anio = $this->faker->numberBetween(1, 6);
        $division = $this->faker->numberBetween(1, 5);

        return [
            'nombre' => "{$anio}° {$division}°",
        ];
    }
}