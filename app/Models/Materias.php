<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $fillable = ['creditos', 'nombre'];

    public function grupos()
    {
        return $this->hasMany(Grupo::class, 'clave_materia');
    }
}
