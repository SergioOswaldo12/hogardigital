<?php include("../includes/header.php"); ?> 
<?php include("../conexion/conexion.php"); ?>

<div class="container py-5">
    <h2 class="fw-bold text-center mb-4">Subir Nuevo Video</h2>

    <div class="card p-4 shadow">
        <!-- IMPORTANTE: enctype="multipart/form-data" -->
        <form action="procesar_video.php" method="POST" enctype="multipart/form-data">

            <label class="fw-bold">Título del video</label>
            <input type="text" name="titulo" class="form-control mb-3" required>

            <label class="fw-bold">Descripción</label>
            <textarea name="descripcion" class="form-control mb-3" required></textarea>

            <label class="fw-bold">Seleccionar video (MP4, AVI, MOV)</label>
            <input type="file" name="video" class="form-control mb-3" accept="video/*" required>

            <button class="btn btn-success w-100">Guardar Video</button>
        </form>
    </div>
</div>

<?php include("../includes/footer.php"); ?>

