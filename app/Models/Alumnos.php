<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'apellido', 'email', 'grupo_id'
    ];

    /**
     * Relación uno a muchos inversa con Grupo.
     */
    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }

    /**
     * Relación uno a muchos con Inscripcion.
     */
    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class);
    }
}
