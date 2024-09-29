<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'dni', 'fecha_nacimiento', 'curso_id'];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
