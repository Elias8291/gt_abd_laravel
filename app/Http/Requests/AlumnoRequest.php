<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnoRequest extends FormRequest
{
    public function authorize()
    {
        // Consider setting this to true if you're using policies or gates for authorization
        return false;
    }

    public function rules()
    {
        return [
            'nombre' => 'required|string|max:255',
            'apellidoPaterno' => 'required|string|max:255',
            'apellidoMaterno' => 'nullable|string|max:255',
            'semestre' => 'required|integer|min:1',
            // Agrega aquí más reglas según tu modelo Alumno
        ];
    }
}
