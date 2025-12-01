<?php include("includes/header.php"); ?>

<div class="container registro-container">
    <div class="card shadow-lg p-4 mt-5">
        <h2 class="text-center fw-bold">Crear Cuenta</h2>
        <p class="text-center text-muted">Regístrate para usar Hogar Digital</p>

        <form action="registro_process.php" method="POST" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Apellidos</label>
                    <input type="text" name="apellidos" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 mb-3">
                    <label class="form-label">Edad</label>
                    <input type="number" name="edad" class="form-control" required>
                </div>

                <div class="col-md-9 mb-3">
                    <label class="form-label">Dirección</label>
                    <input type="text" name="direccion" class="form-control" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Teléfono</label>
                <input type="text" name="telefono" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Usuario (mínimo 10 caracteres)</label>
                <input type="text" name="usuario" class="form-control" minlength="10" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Contraseña (mínimo 8 carac., 1 símbolo y 1 letra)</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Foto de Perfil</label>
                <input type="file" name="foto" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success w-100">Crear Cuenta</button>

        </form>
    </div>
</div>

<?php include("includes/footer.php"); ?>
