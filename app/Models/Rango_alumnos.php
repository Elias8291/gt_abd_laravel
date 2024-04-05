<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RangoAlumno extends Model
{
    use HasFactory;
    protected $fillable = ['min_alumnos', 'max_alumnos'];

    public function grupos()
    {
        return $this->hasMany(Grupo::class, 'id_rango');
    }
}
