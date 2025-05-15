<?php
if (session_status() === PHP_SESSION_NONE)
    session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: /inicioSesion");
    exit;
}

require_once APP . '/views/inc/header_inicio.php';
?>

<section class="py-5 bg-light">
    <div class="container">
        <h2 class="mb-4 text-center">Comparar entrenamientos</h2>
        <form method="POST" class="row g-3 justify-content-center">
            <div class="col-md-4">
                <label for="fecha1" class="form-label">Fecha 1</label>
                <input type="date" class="form-control" name="fecha1" required>
            </div>
            <div class="col-md-4">
                <label for="fecha2" class="form-label">Fecha 2</label>
                <input type="date" class="form-control" name="fecha2" required>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Comparar</button>
            </div>
        </form>
    </div>
</section>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once APP . '/config/Usuario.php';

    $fecha1 = $_POST['fecha1'];
    $fecha2 = $_POST['fecha2'];
    $usuario_id = $_SESSION['usuario_id'];

    $datos1 = Usuario::obtenerDatosPorFecha($usuario_id, $fecha1);
    $datos2 = Usuario::obtenerDatosPorFecha($usuario_id, $fecha2);

    echo "<script>
const datos1 = " . json_encode($datos1) . ";
const datos2 = " . json_encode($datos2) . ";
</script>";
}
?>

<div class="container mt-5">
    <canvas id="graficoComparativo" height="100"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    if (typeof datos1 !== 'undefined' && typeof datos2 !== 'undefined') {
        const labels = [...new Set([...datos1.map(e => e.nombre_ejercicio), ...datos2.map(e => e.nombre_ejercicio)])];

        const obtenerValores = (datos, campo) => labels.map(label => {
            const ejercicio = datos.find(e => e.nombre_ejercicio === label);
            return ejercicio ? ejercicio[campo] : 0;
        });

        const ctx = document.getElementById('graficoComparativo').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels,
                datasets: [
                    {
                        label: 'Series (Fecha 1)',
                        data: obtenerValores(datos1, 'series'),
                        backgroundColor: 'rgba(231, 7, 7, 0.6)',
                    },
                    {
                        label: 'Series (Fecha 2)',
                        data: obtenerValores(datos2, 'series'),
                        backgroundColor: 'rgb(3, 154, 255)',
                    },
                    {
                        label: 'Repeticiones (Fecha 1)',
                        data: obtenerValores(datos1, 'repeticiones'),
                        backgroundColor: 'rgba(231, 7, 7, 0.6)',
                    },
                    {
                        label: 'Repeticiones (Fecha 2)',
                        data: obtenerValores(datos2, 'repeticiones'),
                        backgroundColor: 'rgb(3, 154, 255)',
                    },
                    {
                        label: 'Kg (Fecha 1)',
                        data: obtenerValores(datos1, 'kg'),
                        backgroundColor: 'rgba(231, 7, 7, 0.6)',
                    },
                    {
                        label: 'Kg (Fecha 2)',
                        data: obtenerValores(datos2, 'kg'),
                        backgroundColor: 'rgb(3, 154, 255)',
                    }
                ]
            }
        });
    }
</script>

<?php require_once APP . '/views/inc/footer.php'; ?>