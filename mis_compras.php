<?php

session_start();

if (!isset($_SESSION['id'])) {
    header("Location: index.php");
    exit();
}

include("php/conexion.php");

$idUsuario = $_SESSION['id'];

$sql = "SELECT
            compras.id,
            compras.cantidad,
            compras.fecha,
            productos.nombre,
            productos.precio,
            productos.imagen
        FROM compras
        INNER JOIN productos
        ON compras.id_producto = productos.id
        WHERE compras.id_usuario = '$idUsuario'
        ORDER BY compras.fecha DESC";

$resultado = mysqli_query($conn, $sql);

if (!$resultado) {
    die("Error al cargar las compras: " . mysqli_error($conn));
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Mis compras</title>

<link rel="stylesheet" href="css/style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">

<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

</head>

<body>

<header>

<h1>🛒 Mis compras</h1>

<button
class="volver"
onclick="window.location='/Proyecto_SeminarioAxel/menu.php'"
>
← Menú
</button>

</header>

<div class="productos">

<?php

if (mysqli_num_rows($resultado) > 0) {

    while ($fila = mysqli_fetch_assoc($resultado)) {

        $subtotal = $fila['precio'] * $fila['cantidad'];

?>

<div class="tarjeta">

<img
src="<?php echo htmlspecialchars($fila['imagen']); ?>"
alt="<?php echo htmlspecialchars($fila['nombre']); ?>"
>

<h3>
<?php echo htmlspecialchars($fila['nombre']); ?>
</h3>

<p>
Cantidad: <?php echo $fila['cantidad']; ?>
</p>

<p class="precio">
Total: $<?php echo number_format($subtotal, 2); ?>
</p>

<p>
Fecha: <?php echo htmlspecialchars($fila['fecha']); ?>
</p>

</div>

<?php

    }

} else {

?>

<p style="text-align:center; width:100%; font-size:20px;">
Todavía no has realizado compras.
</p>

<?php

}

?>

</div>

</body>

</html>