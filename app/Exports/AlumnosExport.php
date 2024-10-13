<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class AlumnosExport implements FromCollection, WithHeadings, WithMapping
{
    protected $alumnos;

    public function __construct($alumnos)
    {
        $this->alumnos = $alumnos;
    }

    public function collection()
    {
        return $this->alumnos;
    }

    public function headings(): array
    {
        return [
            'Nombre',
            'DNI',
            'Curso',
            'Edad',
        ];
    }

    public function map($alumno): array
    {
        return [
            $alumno->nombre,
            $alumno->dni,
            $alumno->curso->nombre ?? 'Sin Curso',
            \Carbon\Carbon::parse($alumno->fecha_nacimiento)->age,
        ];
    }
}