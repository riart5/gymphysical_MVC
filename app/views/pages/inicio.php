<?php require_once APP . '/views/inc/header.php' ?>

<body>
    <!-- Sección Principal, aqui deberiamos poner algo como la primera frase nada mas entrar -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>Bienvenido a GymPhysical</h1>
                    <p class="lead">Con la app de entrenamiento Gym Physical, obtienes un programa de fitness
                        personalizado
                        que te da resultados reales.</p>
                    <a id="registrarse-principal" href="../html/registrarse.html" class="btn btn-success">Obtén tu plan
                        de entrenamiento ahora</a>
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


    <!-- Sección de Servicios -->
    <section class="py-5">
        <div class="container">
            <h2 class="mb-4">Nuestros Servicios</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Entrenamiento Personalizado</h5>
                            <p class="card-text">Entrenamiento a medida para alcanzar tus metas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Clases Grupales</h5>
                            <p class="card-text">Clases dinámicas para mantener el ritmo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Nutrición y Consejería</h5>
                            <p class="card-text">Asesoramiento nutricional para complementar tu entrenamiento.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Testimonios -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="mb-4">Lo que dicen nuestros clientes</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">"Me encanta entrenar aquí, el equipo es muy amable y profesional."</p>
                            <h5 class="card-title">Juan P.</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">"He visto resultados increíbles desde que empecé a entrenar en Gym
                                Physical."</p>
                            <h5 class="card-title">María G.</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">"Las clases grupales son divertidas y muy motivadoras."</p>
                            <h5 class="card-title">Luis M.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Promociones -->
    <section class="py-5">
        <div class="container">
            <h2 class="mb-4">Promociones especiales</h2>
            <div class="alert alert-success" role="alert">
                ¡Únete ahora y obtén un mes gratis!
            </div>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="mb-4">Contáctanos</h2>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="message" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </section>
</body>

<?php require_once APP . '/views/inc/footer.php' ?>