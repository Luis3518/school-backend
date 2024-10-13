<?php

namespace Database\Factories;

use App\Models\Alumno;
use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    protected $model = Alumno::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'dni' => $this->faker->unique()->numberBetween(10000000, 99999999),
            'fecha_nacimiento' => $this->faker->date(),
            'curso_id' => Curso::inRandomOrder()->first()->id,
        ];
    }
}