<?php
session_start();

if(!isset($_SESSION['id'])){
    header("Location: index.php");
    exit();
}

include("php/conexion.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Consolas</title>

<link rel="stylesheet" href="css/style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">

<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

</head>

<body>

<header>

<h1>🎮 Consolas</h1>

<button class="volver" onclick="window.location='menu.html'">

← Menú

</button>

</header>

<div class="productos">

<?php

$sql="SELECT * FROM productos
WHERE categoria='Consolas'";

$resultado=mysqli_query($conn,$sql);

while($fila=mysqli_fetch_assoc($resultado)){

?>

<div class="tarjeta">

<img src="<?php echo $fila['imagen']; ?>">

<h3><?php echo $fila['nombre']; ?></h3>

<p class="precio">

$<?php echo number_format($fila['precio'],2); ?>

</p>

<form action="producto.php" method="GET">

<input
type="hidden"
name="id"
value="<?php echo $fila['id']; ?>">

<button type="submit">

Ver

</button>

</form>

<form action="php/guardar.php" method="POST">

<input
type="hidden"
name="idProducto"
value="<?php echo $fila['id']; ?>">

<button type="submit">

Guardar

</button>

</form>

</div>

<?php

}

?>

</div>

<script src="js/script.js"></script>

</body>

</html>