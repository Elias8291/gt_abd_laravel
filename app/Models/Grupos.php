<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'id_rango', 'id_horario', 'clave_materia'];

    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class, 'inscripciones', 'grupo_id', 'alumno_id');
    }

    public function rangoAlumno()
    {
        return $this->belongsTo(RangoAlumno::class, 'id_rango');
    }

    public function horario()
    {
        return $this->belongsTo(Horario::class, 'id_horario');
    }

    public function materia()
    {
        return $this->belongsTo(Materia::class, 'clave_materia');
    }
}
