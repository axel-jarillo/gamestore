<?php

session_start();

if(!isset($_SESSION['id'])){

    header("Location: index.php");
    exit();

}

include("php/conexion.php");

if(!isset($_GET['id'])){

    header("Location: menu.php");
    exit();

}

$id = $_GET['id'];

$sql = "SELECT * FROM productos WHERE id='$id'";

$resultado = mysqli_query($conn,$sql);

$producto = mysqli_fetch_assoc($resultado);

?>
<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php echo $producto['nombre']; ?></title>

<link rel="stylesheet" href="css/style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">

<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

</head>

<body>

<header>

<h1><?php echo $producto['nombre']; ?></h1>

<button class="volver" onclick="window.location='menu.php'">

← Menú

</button>

</header>

<div class="detalle">

<img src="<?php echo $producto['imagen']; ?>">

<h2><?php echo $producto['nombre']; ?></h2>

<p>

<?php echo $producto['descripcion']; ?>

</p>

<h3>

$<?php echo number_format($producto['precio'],2); ?>

</h3>

<form action="php/comprar.php" method="POST">

<input
type="hidden"
name="idProducto"
value="<?php echo $producto['id']; ?>">

<button type="submit">

Comprar

</button>

</form>

</div>

</body>

</html>