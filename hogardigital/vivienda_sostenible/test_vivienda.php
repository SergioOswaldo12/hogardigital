<?php include("../includes/header.php"); ?>
<?php include("../conexion/conexion.php"); ?>

<link rel="stylesheet" href="css/test_vivienda.css">

<div class="banner-vivienda text-white text-center">
    <h1 class="fw-bold">Test de Vivienda Segura y Digna</h1>
    <p class="lead">Evalúa tu hogar y descubre tu nivel de seguridad habitacional</p>
</div>

<div class="container py-5">

    <div class="card shadow-lg p-4">
        <h3 class="fw-bold text-center mb-4">Responde las siguientes preguntas</h3>

        <form action="procesar_test_vivienda.php" method="POST">

            <label class="fw-bold mb-2">Nombre de la familia</label>
            <input type="text" name="nombre_familia" class="form-control mb-3" required>

            <hr>

            <?php
            // LISTA DE PREGUNTAS
            $preguntas = [
                "1. ¿Su vivienda cuenta con cimientos reforzados?",
                "2. ¿Las paredes están en buen estado, sin grietas?",
                "3. ¿El techo está asegurado y no presenta filtraciones?",
                "4. ¿La vivienda tiene ventilación adecuada?",
                "5. ¿Cuenta con acceso a agua segura?",
                "6. ¿La instalación eléctrica está en buen estado?",
                "7. ¿La vivienda está ubicada fuera de zonas de riesgo?",
                "8. ¿Las columnas y vigas están bien construidas?",
                "9. ¿La vivienda tiene acceso a servicios básicos?",
                "10. ¿La estructura general es estable y segura?"
            ];

            foreach ($preguntas as $index => $texto) {
                $num = $index + 1;
                echo "
                <div class='pregunta-box mb-4'>
                    <p class='fw-bold'>$texto</p>
                    <select name='p$num' class='form-select' required>
                        <option value='' disabled selected>Seleccione una opción</option>
                        <option value='1'>1 - Muy malo</option>
                        <option value='2'>2 - Malo</option>
                        <option value='3'>3 - Regular</option>
                        <option value='4'>4 - Bueno</option>
                        <option value='5'>5 - Muy bueno</option>
                    </select>
                </div>";
            }
            ?>

            <button class="btn btn-primary w-100 fw-bold mt-3">Enviar Test</button>
        </form>
    </div>
</div>

<?php include("../includes/footer.php"); ?>

