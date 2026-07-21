<?php

include("conexion.php");

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$verificar = "SELECT * FROM usuarios WHERE usuario='$usuario'";
$resultado = mysqli_query($conn, $verificar);

if(mysqli_num_rows($resultado) > 0){

    echo "<script>
            alert('Ese usuario ya existe');
            window.location='../registro.php';
          </script>";

    exit();

}

$sql = "INSERT INTO usuarios(nombre,usuario,password)
VALUES('$nombre','$usuario','$password')";

if(mysqli_query($conn,$sql)){

    echo "<script>
            alert('Usuario registrado correctamente');
            window.location='../index.php';
          </script>";

}else{

    echo "Error al registrar.";

}

?>