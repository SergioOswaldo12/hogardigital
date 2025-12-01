<?php
include("conexion/conexion.php");

$usuario = $_POST["usuario"];
$password = $_POST["password"];

$sql = $conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario'");

if ($sql->num_rows > 0) {
    $datos = $sql->fetch_assoc();

    if (password_verify($password, $datos["password"])) {
        echo "<script>alert('Bienvenido $usuario'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Contraseña incorrecta'); window.location='login.php';</script>";
    }
} else {
    echo "<script>alert('Usuario no encontrado'); window.location='login.php';</script>";
}
?>
