<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contraseña Generada</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<div class="bg-white p-10 rounded-xl shadow-lg text-center">
    <h1 class="text-2xl font-bold mb-6">Contraseña Generada</h1>

    <div class="bg-gray-200 p-4 rounded-lg text-2xl font-mono tracking-widest mb-6">
        {{ $password }}
    </div>

    <a href="{{ route('formulario') }}"
        class="text-blue-600 hover:underline">
        Volver al formulario
    </a>
</div>

</body>
</html>
