<?php include("../includes/header.php"); ?>
<?php include("../conexion/conexion.php"); ?>

<link rel="stylesheet" href="css/construccion.css">

<div class="banner-construccion text-white text-center">
    <h1 class="fw-bold">Construcción Segura</h1>
    <p class="lead">Aprende con videos, guías e infografías prácticas</p>
</div>

<div class="container py-5">

<!-- =========================== VIDEOS DESDE BASE DE DATOS ============================ -->

    <h2 class="text-center fw-bold mb-4">Videos Educativos</h2>

    <div class="row">
        <?php
        $consulta = $conexion->query("SELECT * FROM videos_construccion ORDER BY fecha_subida DESC");

        while ($video = $consulta->fetch_assoc()) {
            echo '
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm video-card">
                    
                    <video class="video-yt" controls>
                        <source src="'.$video["url_video"].'" type="video/mp4">
                    </video>

                    <div class="card-body">
                        <h5 class="fw-bold">'.$video["titulo"].'</h5>
                        <p>'.$video["descripcion"].'</p>
                    </div>
                </div>
            </div>';
        }
        ?>
    </div>
</div>



    <!-- ===========================
         GUÍAS ILUSTRADAS
    ============================ -->
    <h2 class="text-center fw-bold mt-5 mb-4">Guías Ilustradas</h2>

    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <img src="img/imagen1.png" class="img-fluid guia-img shadow-sm">
            <p class="fw-bold mt-2">Cómo reforzar columnas</p>
        </div>

        <div class="col-md-4 mb-4">
            <img src="img/imagen2.png" class="img-fluid guia-img shadow-sm">
            <p class="fw-bold mt-2">Materiales recomendados</p>
        </div>

        <div class="col-md-4 mb-4">
            <img src="img/imagen3.png" class="img-fluid guia-img shadow-sm">
            <p class="fw-bold mt-2">Cimientos seguros</p>
        </div>
    </div>

    <!-- ===========================
         CONSEJOS PRÁCTICOS
    ============================ -->
    <h2 class="text-center fw-bold mt-5 mb-4">Consejos Prácticos</h2>

    <ul class="lista-consejos">
        <li>● Verifica el tipo de suelo antes de construir.</li>
        <li>● No uses columnas demasiado delgadas.</li>
        <li>● Refuerza las uniones entre muros y techos.</li>
        <li>● Usa materiales certificados.</li>
        <li>● No construyas en zonas de riesgo.</li>
    </ul>

    <!-- ===========================
         INFOGRAFÍAS
    ============================ -->
    <h2 class="text-center fw-bold mt-5 mb-4">Infografías</h2>

    <div class="row">
        <div class="col-md-6 mb-4">
            <img src="img/info1.png" class="img-fluid shadow-sm rounded">
        </div>

        <div class="col-md-6 mb-4">
            <img src="img/info2.png" class="img-fluid shadow-sm rounded">
        </div>
    </div>

</div>

<?php include("../includes/footer.php"); ?>
