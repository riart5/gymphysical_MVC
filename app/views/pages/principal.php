<?php 
    if (isset($_SESSION['usuario_email'])) {
        require_once APP . '/views/inc/header_inicio.php';
    } else {
        require_once APP . '/views/inc/header.php';
    }
?>
<body>
    <!-- Sección Principal, aqui deberiamos poner algo como la primera frase nada mas entrar -->
    <?php 
    echo'Has iniciado sesion con los siguientes parametros' . $_SESSION['usuario_nombre'] . $_SESSION['usuario_id'];
    ?>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>Bienvenido a GymPhysical</h1>
                    <p class="lead">Con la app de entrenamiento Gym Physical, obtienes un programa de fitness
                        personalizado
                        que te da resultados reales.</p>
                </div>
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video class="embed-responsive-item" controls>
                            <source src="../../assets/Videos/ejercicio.mp4" type="video/mp4">
                            Tu navegador no soporta el elemento de video.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>