<?php
if (session_status() === PHP_SESSION_NONE)
    session_start();
if (!isset($_SESSION['usuario_email']) || !isset($_SESSION['usuario_id'])) {
    header("Location: /inicioSesion");
    exit;
}

require_once APP . '/config/Usuario.php';
require_once APP . '/views/inc/header_inicio.php';

$usuario_id = $_SESSION['usuario_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['actualizar'])) {
        Usuario::actualizarEjercicio(
            $_POST['ejercicio_id'],
            intval($_POST['series']),
            intval($_POST['repeticiones']),
            floatval($_POST['kg'])
        );
        header("Location: /mi_entrenamiento");
        exit;
    }

    if (isset($_POST['eliminar'])) {
        Usuario::eliminarEjercicio($_POST['eliminar']);
        header("Location: /mi_entrenamiento");
        exit;
    }

    if (isset($_POST['vaciar'])) {
        Usuario::vaciarEntrenamiento($usuario_id);
        header("Location: /mi_entrenamiento");
        exit;
    }
}

$ejercicios = Usuario::obtenerEntrenamientoAgrupadoPorFecha($usuario_id);
?>

<body>
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="mb-4 text-center">Mi Entrenamiento</h2>

            <?php if (!empty($ejercicios)): ?>
                <?php foreach ($ejercicios as $fecha => $ejerciciosPorFecha): ?>
                    <div class="card mb-4">
                        <div class="card-header bg-dark text-white">
                            <?= $fecha ?>
                        </div>
                        <div class="card-body">

                            <?php
                            $tipos = [
                                'Empujes' => ['Press de Banca', 'Aperturas con mancuernas', 'Flexiones', 'Press militar', 'Elevaciones laterales', 'Pájaro con mancuernas', 'Fondos', 'Extensión con mancuerna', 'Press cerrado'],
                                'Tracciones' => ['Jalón al pecho', 'Dominadas', 'Remo con barra', 'Curl con barra', 'Curl martillo', 'Curl concentrado'],
                                'Piernas' => ['Sentadilla libre', 'Prensa de piernas', 'Extensiones de cuádriceps', 'Curl femoral tumbado', 'Peso muerto rumano', 'Buenos días', 'Aductor en máquina', 'Abductor en máquina', 'Elevaciones de talones']
                            ];

                            foreach ($tipos as $tipo => $nombres) {
                                $filtrados = array_filter($ejerciciosPorFecha, fn($e) => in_array($e['nombre_ejercicio'], $nombres));
                                if (!empty($filtrados)):
                                    ?>
                                    <h5 class="mt-4"><?= $tipo ?></h5>
                                    <div class="table-responsive mb-3">
                                        <table class="table table-bordered table-hover text-center">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>Ejercicio</th>
                                                    <th>Series</th>
                                                    <th>Repeticiones</th>
                                                    <th>Kilos</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($filtrados as $e): ?>
                                                    <tr>
                                                        <form method="POST">
                                                            <td><?= htmlspecialchars($e['nombre_ejercicio']) ?></td>
                                                            <td><input type="number" name="series" class="form-control"
                                                                    value="<?= $e['series'] ?>"></td>
                                                            <td><input type="number" name="repeticiones" class="form-control"
                                                                    value="<?= $e['repeticiones'] ?>"></td>
                                                            <td><input type="number" name="kg" step="0.1" class="form-control"
                                                                    value="<?= $e['kg'] ?>"></td>
                                                            <td>
                                                                <input type="hidden" name="ejercicio_id" value="<?= $e['id'] ?>">
                                                                <button type="submit" name="actualizar"
                                                                    class="btn btn-primary btn-sm">Guardar</button>
                                                                <button type="submit" name="eliminar" value="<?= $e['id'] ?>"
                                                                    class="btn btn-danger btn-sm">Eliminar</button>
                                                            </td>
                                                        </form>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="text-center mb-4">
                                        <a href="vista_comparativa" class="btn btn-info">Comparar entrenamientos por fechas</a>
                                    </div>
                                    <?php
                                endif;
                            }
                            ?>
                        </div>
                    </div>
                <?php endforeach; ?>

                <form method="POST" class="text-center mt-4">
                    <button type="submit" name="vaciar" class="btn btn-danger">Vaciar entrenamiento</button>
                </form>
            <?php else: ?>
                <div class="alert alert-info text-center">No has añadido ningún ejercicio aún.</div>
            <?php endif; ?>
        </div>
    </section>
</body>

<?php require_once APP . '/views/inc/footer.php'; ?>