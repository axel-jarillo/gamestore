<?php

session_start();

include("conexion.php");

$idUsuario = $_SESSION['id'];

$idProducto = $_POST['idProducto'];

$sql = "INSERT INTO compras(id_usuario,id_producto)
VALUES('$idUsuario','$idProducto')";

if(mysqli_query($conn,$sql)){

    echo "<script>

    alert('Compra realizada correctamente');

    window.location='../menu.php';

    </script>";

}else{

    echo "Error al registrar la compra.";

}

?>