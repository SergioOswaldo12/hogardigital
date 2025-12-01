<?php include("includes/header.php"); ?>

<div class="container login-container">
    <div class="card shadow-lg p-4 mt-5">
        <h2 class="text-center fw-bold">Iniciar Sesión</h2>
        <p class="text-center text-muted">Accede a tu cuenta de Hogar Digital</p>

        <form action="login_process.php" method="POST">

            <div class="mb-3">
                <label class="form-label">Usuario</label>
                <input type="text" name="usuario" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Ingresar</button>

            <div class="text-center mt-3">
                <a href="registro.php">¿No tienes cuenta? Crear cuenta</a>
            </div>

        </form>
    </div>
</div>

<?php include("includes/footer.php"); ?>
