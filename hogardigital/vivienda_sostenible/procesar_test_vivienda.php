<?php
include("../conexion/conexion.php");

$nombre_familia = $_POST["nombre_familia"];

// Obtener puntajes
$puntajes = [];
$total = 0;

for ($i = 1; $i <= 10; $i++) {
    $puntajes[$i] = $_POST["p$i"];
    $total += $puntajes[$i];
}

// Determinar nivel
if ($total <= 20) {
    $nivel = "Crítico";
} elseif ($total <= 35) {
    $nivel = "Regular";
} else {
    $nivel = "Seguro y Digno";
}

// Insertar en BD
$sql = "INSERT INTO test_vivienda (
        nombre_familia, p1, p2, p3, p4, p5, 
        p6, p7, p8, p9, p10, 
        puntaje_total, nivel
    ) VALUES (
        '$nombre_familia',
        '{$puntajes[1]}','{$puntajes[2]}','{$puntajes[3]}','{$puntajes[4]}','{$puntajes[5]}',
        '{$puntajes[6]}','{$puntajes[7]}','{$puntajes[8]}','{$puntajes[9]}','{$puntajes[10]}',
        '$total','$nivel'
    )";

if ($conexion->query($sql)) {
    echo "<script>
            alert('Test enviado correctamente. Puntaje: $total - Nivel: $nivel');
            window.location='resultado_test_vivienda.php?nombre=$nombre_familia&puntaje=$total&nivel=$nivel';
          </script>";
} else {
    echo "<script>alert('Error al guardar el test.');</script>";
}
?>
