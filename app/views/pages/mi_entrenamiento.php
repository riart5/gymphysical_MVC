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
    if (isset($_POST['guardar'])) {
        Usuario::actualizarEjercicio(
            $_POST['id'],
            $_POST['kg'],
            $_POST['series'],
            $_POST['repeticiones']
        );
        header("Location: /mi_entrenamiento");
        exit;
    }
}

$ejercicios = Usuario::obtenerEntrenamiento($usuario_id);

// Agrupar por fecha y grupo muscular
$grupos = [
    'Empujes' => ['Press de Banca', 'Aperturas con mancuernas', 'Flexiones', 'Press militar', 'Elevaciones laterales', 'Fondos'],
    'Tracciones' => ['Curl con barra', 'Curl martillo', 'Remo con barra', 'Jalón al pecho', 'Dominadas'],
    'Piernas' => ['Sentadilla libre', 'Prensa de piernas', 'Elevaciones de talones']
];

$agrupados = [];

foreach ($ejercicios as $e) {
    $fecha = explode(' ', $e['fecha'])[0];
    $nombre = $e['nombre_ejercicio'];
    $grupo = 'Otros';
    foreach ($grupos as $g => $lista) {
        if (in_array($nombre, $lista)) {
            $grupo = $g;
            break;
        }
    }
    $agrupados[$fecha][$grupo][] = $e;
}

// Ordenar fechas descendentes
krsort($agrupados);
?>

<body>
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="mb-4 text-center">Mi Entrenamiento</h2>

            <?php if (!empty($agrupados)): ?>
                <?php foreach ($agrupados as $fecha => $grupos): ?>
                    <h4 class="mt-4"><?= $fecha ?></h4>
                    <?php foreach ($grupos as $grupo => $ejercicios): ?>
                        <div class="card my-3">
                            <div class="card-header bg-dark text-white"><?= $grupo ?></div>
                            <div class="card-body p-0">
                                <table class="table table-bordered table-hover text-center mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Ejercicio</th>
                                            <th>Series</th>
                                            <th>Repeticiones</th>
                                            <th>Kilos</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($ejercicios as $e): ?>
                                            <tr>
                                                <form method="POST">
                                                    <td><?= htmlspecialchars($e['nombre_ejercicio']) ?></td>
                                                    <td><input type="number" name="series" value="<?= $e['series'] ?>"
                                                            class="form-control" required></td>
                                                    <td><input type="number" name="repeticiones" value="<?= $e['repeticiones'] ?>"
                                                            class="form-control" required></td>
                                                    <td><input type="number" name="kg" value="<?= $e['kg'] ?>" step="0.1"
                                                            class="form-control" required></td>
                                                    <td>
                                                        <input type="hidden" name="id" value="<?= $e['id'] ?>">
                                                        <button type="submit" name="guardar"
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
                        </div>
                    <?php endforeach; ?>
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