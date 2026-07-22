<?php

session_start();

if (!isset($_SESSION['id'])) {
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

<img
src="img/logo.png"
class="logo"
alt="Logo de GameStore"
>

<h1>GameStore</h1>

<h2>
Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario']); ?>
</h2>

<a href="/Proyecto_SeminarioAxel/consolas.php">
    <button type="button">
        Consolas
    </button>
</a>

<a href="/Proyecto_SeminarioAxel/accesorios.php">
    <button type="button">
        Accesorios
    </button>
</a>

<a href="/Proyecto_SeminarioAxel/videojuegos.php">
    <button type="button">
        Videojuegos
    </button>
</a>

<a href="/Proyecto_SeminarioAxel/mis_compras.php">
    <button type="button" class="compras">
        Mis compras
    </button>
</a>

<a href="/Proyecto_SeminarioAxel/guardados.php">
    <button type="button" class="guardados">
        Productos Guardados
    </button>
</a>


<button
type="button"
class="salir"
onclick="cerrarSesion()"
>
Cerrar sesión
</button>

</div>

<script src="js/script.js"></script>

</body>

</html>