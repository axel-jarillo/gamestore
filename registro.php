<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Registro</title>

<link rel="stylesheet" href="css/style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">

<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

</head>

<body>

<div class="login">

<img src="img/logo.png" class="logo">

<h1>GameStore</h1>

<h2>Crear Cuenta</h2>

<form action="php/registrar.php" method="POST">

<input
type="text"
name="nombre"
placeholder="Nombre"
required>

<input
type="text"
name="usuario"
placeholder="Usuario"
required>

<input
type="password"
name="password"
placeholder="Contraseña"
required>

<button type="submit">

Registrarse

</button>

</form>

<p>

¿Ya tienes cuenta?

<a href="index.php">

Iniciar Sesión

</a>

</p>

</div>

<script src="js/script.js"></script>

</body>

</html>
