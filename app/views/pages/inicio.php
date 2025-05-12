<?php 
  if (isset($_SESSION['usuario_email'])) {
    require_once APP . '/views/inc/header_inicio.php';
} else {
    require_once APP . '/views/inc/header.php';
}
?>
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
                    <a id="registrarse-principal" url="/views/registro" class="btn btn-success">Obtén tu plan
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

    <section class="py-5 bg-white">
  <div class="container text-center">
    <h2 class="mb-4">¿Cómo funciona GymPhysical?</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="p-4 border rounded shadow-sm h-100">
          <div class="mb-3">
            <i class="bi bi-person-plus display-4 text-primary"></i>
          </div>
          <h5>1. Regístrate gratis</h5>
          <p>Crea tu cuenta en segundos y accede a tu panel personal.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 border rounded shadow-sm h-100">
          <div class="mb-3">
            <i class="bi bi-bullseye display-4 text-success"></i>
          </div>
          <h5>2. Define tus objetivos</h5>
          <p>Elige entre perder peso, ganar músculo o mantenerte en forma.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 border rounded shadow-sm h-100">
          <div class="mb-3">
            <i class="bi bi-calendar-check display-4 text-warning"></i>
          </div>
          <h5>3. Recibe tu plan</h5>
          <p>Accede a rutinas y consejos adaptados a ti cada semana.</p>
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
            <form id="main-contact-form" class="contact-form" name="contact-form" action="/inicio/envio_mensaje" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre: </label>
                    <input type="text" id="nombre" name="nombre" class="form-control" required="required">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                    <input type="email" id="email" name="email" class="form-control" required="required">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Mensaje</label>
                    <textarea name="mensaje" id="mensaje" required="required" class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
            
        </div>
    </section>
</body>

<?php require_once APP . '/views/inc/footer.php' ?>