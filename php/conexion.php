<?php

$host = "localhost";
$usuario = "gamestore";
$password = "jarillo210308";
$bd = "gamestore";

$conn = mysqli_connect($host, $usuario, $password, $bd);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>