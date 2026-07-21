<?php

session_start();

if(!isset($_SESSION['id'])){

    header("Location: index.php");
    exit();

}

?>
<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Menú Principal</title>

<link rel="stylesheet" href="css/style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">

<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

</head>

<body>

<div class="menu">

<img src="img/logo.png" class="logo">

<h1>GameStore</h1>

<h2>Bienvenido, <?php echo $_SESSION['usuario']; ?></h2>

<button onclick="window.location='consolas.html'">
 Consolas
</button>

<button onclick="window.location='accesorios.html'">
 Accesorios
</button>

<button onclick="window.location='videojuegos.html'">
 Videojuegos
</button>

<button class="guardados" onclick="window.location='guardados.html'">
 Productos Guardados
</button>

<button class="salir" onclick="cerrarSesion()">
Cerrar sesión
</button>

</div>

<script src="js/script.js"></script>

</body>

</html>