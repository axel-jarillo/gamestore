<?php

session_start();

include("conexion.php");

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";

$resultado = mysqli_query($conn,$sql);

if(mysqli_num_rows($resultado)==1){

    $fila = mysqli_fetch_assoc($resultado);

    if(password_verify($password,$fila['password'])){

        $_SESSION['id']=$fila['id'];
        $_SESSION['usuario']=$fila['usuario'];

        header("Location: ../menu.php");

    }else{

        echo "<script>
        alert('Contraseña incorrecta');
        window.location='../index.php';
        </script>";

    }

}else{

    echo "<script>
    alert('Usuario no encontrado');
    window.location='../index.php';
    </script>";

}

?>