<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 6) as $anio) {
            foreach (range(1, 5) as $division) {
                Curso::factory()->create([
                    'nombre' => "{$anio}° {$division}°",
                ]);
            }
        }
    }
}