<?php
$conexion = new mysqli("localhost", "root", "", "hogar_digital");

if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}
?>
