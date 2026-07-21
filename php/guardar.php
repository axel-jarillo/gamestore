<?php

session_start();

include("conexion.php");

$idUsuario = $_SESSION['id'];
$idProducto = $_POST['idProducto'];

$verificar = "SELECT * FROM guardados
WHERE id_usuario='$idUsuario'
AND id_producto='$idProducto'";

$resultado = mysqli_query($conn, $verificar);

if(mysqli_num_rows($resultado) == 0){

    $sql = "INSERT INTO guardados(id_usuario,id_producto)
    VALUES('$idUsuario','$idProducto')";

    mysqli_query($conn, $sql);

}

header("Location: ../guardados.php");

?>