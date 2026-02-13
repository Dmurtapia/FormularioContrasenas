<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Solicitud de Visualización Admin</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-lg">
    <h1 class="text-2xl font-bold mb-6 text-center">Solicitud de Visualización de Contraseña</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('solicitud.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block font-medium">Nombre</label>
            <input type="text" name="nombre" value="{{ old('nombre') }}"
                class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label class="block font-medium">Email</label>
            <input type="email" name="email" value="{{ old('email') }}"
                class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label class="block font-medium">Motivo de la solicitud</label>
            <textarea name="motivo"
                class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-500">{{ old('motivo') }}</textarea>
        </div>

        <button type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
            Enviar Solicitud
        </button>
    </form>
</div>

</body>
</html>
