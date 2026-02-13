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
        'email.required' => 'El email es obligatorio.',
        'email.email' => 'Debes introducir un email válido.',
        'motivo.required' => 'Debes indicar el motivo de la solicitud.'
    ]);
    // Primera letra en mayúscula
    $firstLetter = chr(random_int(65, 90)); // A-Z
    
    // Generar 7 letras minúsculas aleatorias
    $letters = '';
    for ($i = 0; $i < 7; $i++) {
        $letters .= chr(random_int(97, 122)); // a-z
    }   

    // Generar 2 números al final
    $numbers = str_pad(random_int(0, 99), 2, '0', STR_PAD_LEFT);

    // Construir contraseña final
    $password = $firstLetter . $letters . $numbers;

    return view('resultado', compact('password'));
    }
}
