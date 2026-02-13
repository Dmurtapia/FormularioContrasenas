<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Solicitud de Visualización</title>
    <link rel="stylesheet" href="{{ asset('css/vitalia.css') }}">
</head>

<body>

    <header>
        <div class="container header-flex">
            <div class="logo-box">
                <div class="logo-icon"></div>
                <div>
                    <h3>Portal de Solicitudes</h3>
                    <small>Acceso controlado · Administración</small>
                </div>
            </div>
            <span class="badge">Entorno seguro</span>
        </div>
    </header>

    <main>
        <div class="container grid">

            <div class="card">
                <h1>Solicitud de visualización de contraseña</h1>
                <p>Este formulario debe utilizarse únicamente cuando sea estrictamente necesario
                    para la gestión de incidencias técnicas, mantenimiento del sistema o tareas
                    administrativas autorizadas. Todas las solicitudes quedan registradas y
                    almacenadas por motivos de seguridad, auditoría y trazabilidad interna.</p>
            </div>

            <div class="card">

                @if ($errors->any())
                    <div class="error-box">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('solicitud.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="nombre" value="{{ old('nombre') }}">
                    </div>

                    <div class="form-group">
                        <label>Email (Usar exclusivamente cuentas de vitalia)</label>
                        <input type="email" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label>Motivo</label>
                        <textarea name="motivo">{{ old('motivo') }}</textarea>
                    </div>

                    <button type="submit">Enviar solicitud</button>
                </form>
            </div>

        </div>
    </main>

    <footer>
        © {{ date('Y') }} Portal interno · Seguridad · Cumplimiento
    </footer>

</body>

</html>
