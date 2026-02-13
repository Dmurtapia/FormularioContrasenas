<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    public function index()
    {
        return view('formulario');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'motivo' => 'required|string'
        ], [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.max' => 'El nombre no puede superar los 255 caracteres.',

            'email.required' => 'El email es obligatorio.',
            'email.email' => 'Debes introducir un email válido.',

            'motivo.required' => 'Debes indicar el motivo de la solicitud.'
        ]);

        // Generar contraseña numérica aleatoria de 10 dígitos
        $password = str_pad(random_int(0, 9999999999), 10, '0', STR_PAD_LEFT);

        return view('resultado', compact('password'));
    }
}
