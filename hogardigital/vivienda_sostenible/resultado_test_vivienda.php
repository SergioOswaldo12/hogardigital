<?php include("../includes/header.php"); ?>

<link rel="stylesheet" href="test_vivienda.css">

<?php
$nombre = $_GET["nombre"];
$puntaje = $_GET["puntaje"];
$nivel = $_GET["nivel"];

// Color según nivel
$color = ($nivel == "Crítico") ? "danger" :
         (($nivel == "Regular") ? "warning" : "success");
?>

<div class="container py-5">
    <div class="card border-<?php echo $color; ?> shadow-lg p-4">
        <h2 class="text-center fw-bold mb-4">Resultado del Test</h2>

        <h4 class="text-center">Familia: <strong><?php echo $nombre; ?></strong></h4>
        <h3 class="text-center mt-3">Puntaje total: <strong><?php echo $puntaje; ?>/50</strong></h3>

        <div class="alert alert-<?php echo $color; ?> text-center mt-4">
            <h4 class="fw-bold">Nivel: <?php echo $nivel; ?></h4>
        </div>

        <div class="text-center mt-4">
            <a href="test_vivienda.php" class="btn btn-primary">Realizar otra evaluación</a>
        </div>
    </div>
</div>

<?php include("../includes/footer.php"); ?>
