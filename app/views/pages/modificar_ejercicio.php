<?php
if (session_status() === PHP_SESSION_NONE)
    session_start();
if (!isset($_SESSION['usuario_email']) || !isset($_SESSION['usuario_id'])) {
    header("Location: /inicioSesion");
    exit;
}

require_once APP . '/views/inc/header_inicio.php';

$ejercicio = $datos['ejercicio'] ?? null;
if (!$ejercicio) {
    echo "<div class='alert alert-danger text-center'>No se encontró el ejercicio.</div>";
    require_once APP . '/views/inc/footer.php';
    exit;
}
?>

<section class="py-5 bg-light">
    <div class="container">
        <h2 class="mb-4 text-center">Modificar Ejercicio</h2>

        <form method="POST" action="/update/<?= $ejercicio['id'] ?>" class="row g-3 justify-content-center">
            <div class="col-md-6">
                <label for="nombre" class="form-label">Nombre del ejercicio</label>
                <input type="text" class="form-control" name="nombre" id="nombre"
                    value="<?= htmlspecialchars($ejercicio['nombre_ejercicio']) ?>" required>
            </div>
            <div class="col-md-2">
                <label for="series" class="form-label">Series</label>
                <input type="number" class="form-control" name="series" id="series" value="<?= $ejercicio['series'] ?>"
                    required>
            </div>
            <div class="col-md-2">
                <label for="repeticiones" class="form-label">Repeticiones</label>
                <input type="number" class="form-control" name="repeticiones" id="repeticiones"
                    value="<?= $ejercicio['repeticiones'] ?>" required>
            </div>
            <div class="col-md-2">
                <label for="kg" class="form-label">Kilos</label>
                <input type="number" step="0.1" class="form-control" name="kg" id="kg" value="<?= $ejercicio['kg'] ?>"
                    required>
            </div>
            <div class="col-12 text-center mt-3">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="/mi_entrenamiento" class="btn btn-secondary ms-2">Cancelar</a>
            </div>
        </form>
    </div>
</section>

<?php require_once APP . '/views/inc/footer.php'; ?>