<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BARÚ Food Lounge - Login</title>
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
    <!-- Google Fonts para fuentes -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Pacifico&display=swap" rel="stylesheet">
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1>BARÚ</h1>
        <p class="subtitle">Food Lounge</p>
        <form action="#" method="POST">
            @csrf
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="usuario" placeholder="Usuario" required>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="contrasena" placeholder="Contraseña" required>
            </div>
            <button type="submit">Login</button>
            <div class="remember">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember me</label>
            </div>
        </form>
        <form action="#"> 
            
            <label for="remember">Registrarse</label>

        </form>
    </div>
</body>
</html>