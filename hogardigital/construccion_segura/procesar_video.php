<?php
include("../conexion/conexion.php");

// Recibir datos del formulario
$titulo = $_POST["titulo"];
$descripcion = $_POST["descripcion"];

// Carpeta donde se guardarán los videos
$carpeta_videos = "../videos/";

// Crear carpeta si no existe
if (!file_exists($carpeta_videos)) {
    mkdir($carpeta_videos, 0777, true);
}

// Capturar archivo del input
$video = $_FILES["video"]["name"];
$video_tmp = $_FILES["video"]["tmp_name"];

// Ruta final dentro del servidor
$ruta_final = $carpeta_videos . basename($video);

// Mover archivo subido
if (move_uploaded_file($video_tmp, $ruta_final)) {

    // Guardar ruta en la base de datos
    $sql = "INSERT INTO videos_construccion (titulo, descripcion, url_video)
            VALUES ('$titulo', '$descripcion', '$ruta_final')";

    if ($conexion->query($sql)) {
        echo "<script>alert('Video subido correctamente'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Error al guardar en la base de datos');</script>";
    }

} else {
    echo "<script>alert('Error al subir el archivo de video');</script>";
}
?>
