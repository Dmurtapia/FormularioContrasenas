<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contraseña Generada</title>
    <link rel="stylesheet" href="{{ asset('css/vitalia.css') }}">
</head>
<body>

<main>
    <div class="container">
        <div class="card result-box">

            <h1 style="font-size: 32px; margin-bottom: 10px;">
                Contraseña Generada
            </h1>

            <p style="color:#4B5563; margin-bottom:25px;">
                Utiliza esta contraseña según el procedimiento interno establecido.
            </p>

            <div class="password-box" style="
                font-size: 42px;
                font-weight: bold;
                letter-spacing: 6px;
                color: #006BB6;
                background-color: #F0F9FF;
                border: 2px solid #006BB6;
                padding: 25px;
                border-radius: 12px;
                margin-bottom: 30px;
            ">
                {{ $password }}
            </div>

            <div style="display:flex; justify-content:center; gap:15px; flex-wrap:wrap;">

                <a href="{{ route('formulario') }}">
                    <button style="min-width:140px;">
                        Volver
                    </button>
                </a>

                <button onclick="navigator.clipboard.writeText('{{ $password }}')" 
                        style="
                        min-width:180px;
                        background-color:#e7f5f0;
                        ">
                    Copiar contraseña
                </button>

            </div>

            <p style="margin-top:25px; font-size:13px; color:#6B7280;">
                Recomendación: no compartas esta contraseña.
            </p>

        </div>
    </div>
</main>

</body>
</html>
