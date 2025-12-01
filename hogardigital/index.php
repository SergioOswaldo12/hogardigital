<?php include("includes/header.php"); ?>

<!-- Fondo general azul suave -->
<div class="fondo-azul">

    <!-- ===========================
         CARRUSEL
    ============================ -->
    <div id="carouselHogarDigital" class="carousel slide" data-bs-ride="carousel" data-bs-interval="30000">

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="img/slider1.png" class="d-block w-100 carrusel-img" alt="Imagen 1">
            </div>

            <div class="carousel-item">
                <img src="img/slider2.png" class="d-block w-100 carrusel-img" alt="Imagen 2">
            </div>

            <div class="carousel-item">
                <img src="img/slider3.png" class="d-block w-100 carrusel-img" alt="Imagen 3">
            </div>

        </div>

        <!-- Flechas de control -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselHogarDigital" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselHogarDigital" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>

    <!-- BOTÓN CONOCER MÁS -->
    <section class="text-center py-4">
        <a href="#info" class="btn btn-primary btn-lg fw-bold">Conocer más</a>
    </section>

    <!-- ===========================
         ¿Qué es Hogar Digital?
    ============================ -->
    <section id="info" class="container py-5">
        <h2 class="text-center fw-bold mb-4">¿Qué es Hogar Digital?</h2>
        <p class="text-center fs-5">
            Hogar Digital es una plataforma virtual que brinda orientación técnica, legal y
            social a las familias de bajos recursos para mejorar sus viviendas mediante
            información clara, accesible y basada en Derechos Humanos.
        </p>
    </section>

    <!-- ===========================
         IMPORTANCIA
    ============================ -->
    <section class="container py-5">
        <h2 class="text-center fw-bold mb-4">Importancia</h2>
        <p class="text-center fs-5">
            En el Perú, más del 60% de viviendas se construyen sin asesoría técnica. Esta plataforma
            busca reducir riesgos, mejorar la calidad de vida y promover construcciones seguras
            frente a sismos y desastres naturales.
        </p>
    </section>

    <!-- ===========================
         BENEFICIOS
    ============================ -->
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Beneficios para las Familias</h2>

            <div class="row text-center">

                <div class="col-md-4 mb-4">
                    <div class="p-4 bg-white shadow-sm rounded">
                        <h4 class="fw-bold">✔ Información confiable</h4>
                        <p>Guías y consejos basados en normas técnicas y derechos humanos.</p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="p-4 bg-white shadow-sm rounded">
                        <h4 class="fw-bold">✔ Contenido práctico</h4>
                        <p>Videos, infografías y pasos sencillos para mejorar la vivienda.</p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="p-4 bg-white shadow-sm rounded">
                        <h4 class="fw-bold">✔ Acceso gratuito</h4>
                        <p>Disponible desde celular o PC para todas las familias.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ===========================
         MÓDULOS EDUCATIVOS
    ============================ -->
    <section class="text-center py-5">
        <h2 class="fw-bold mb-3">Explorar Módulos Educativos</h2>
        <a href="#" class="btn btn-primary btn-lg fw-bold">Ir a los Módulos</a>
    </section>

</div> <!-- cierre del fondo -->

<?php include("includes/footer.php"); ?>


