<?php
include("conexion/conexion.php");

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$edad = $_POST["edad"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];
$usuario = $_POST["usuario"];
$password = $_POST["password"];

// VALIDACIONES
if (strlen($usuario) < 10) {
    echo "<script>alert('El usuario debe tener mínimo 10 caracteres'); window.location='registro.php';</script>";
    exit;
}

if (!preg_match('/[A-Za-z]/', $password) || !preg_match('/[\W]/', $password) || strlen($password) < 8) {
    echo "<script>alert('La contraseña debe tener mínimo 8 caracteres, 1 símbolo y 1 letra'); window.location='registro.php';</script>";
    exit;
}

// Encriptar contraseña
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

// Manejo de foto
$fotoNombre = basename($_FILES["foto"]["name"]);
$fotoRuta = "img/usuarios/" . $fotoNombre;
move_uploaded_file($_FILES["foto"]["tmp_name"], $fotoRuta);

$sql = "INSERT INTO usuarios 
(nombre, apellidos, edad, telefono, direccion, usuario, password, foto)
VALUES 
('$nombre', '$apellidos', '$edad', '$telefono', '$direccion', '$usuario', '$passwordHash', '$fotoRuta')";

if ($conexion->query($sql)) {
    echo "<script>alert('Registro exitoso'); window.location='login.php';</script>";
} else {
    echo "<script>alert('Error al registrar: ".$conexion->error."'); window.location='registro.php';</script>";
}
?>
