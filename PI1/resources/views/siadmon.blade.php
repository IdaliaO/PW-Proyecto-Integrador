<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Integral de Administración</title>
    <link rel="stylesheet" href="{{ asset('css/siadmon.css') }}">
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    
    <div class="header-section">
        <img src="{{ asset('img/adminpage.png') }}" alt="Header Image" class="header-image">
        <h1 class="system-title">SISTEMA INTEGRAL DE ADMINISTRACIÓN HOSPITALARIA</h1>
    </div>

    <div class="container login-container">
        <div class="col-4 text-center">
            <img src="{{ asset('img/logo.jpg') }}" alt="Mental Balance" class="logo">
        </div>
        <div class="col-9 form-section">
            <form>
                <div class="mb-2">
                    <label for="usuario" class="form-label">Usuario:</label>
                    <input type="text" class="form-control" id="usuario" name="usuario">
                </div>
                <div class="mb-2">
                    <label for="contrasena" class="form-label">Contraseña:</label>
                    <input type="password" class="form-control" id="contrasena" name="contrasena">
                </div>
                <div class="button-section d-flex justify-content-start mt-1">
                    <button type="submit" class="btn btn-link btn-login me-2">Entrar</button>
                    <button type="button" class="btn btn-link btn-reset">Cambiar Contraseña</button>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>

