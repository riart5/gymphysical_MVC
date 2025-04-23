<?php
use PHPMailer\PHPMailer\PHPMailer;
class Views extends Control
{

    public function inicio()
    {

        $this->load_view('inicio');
    }

    public function registro()
    {
        $this->load_view(view: 'registro');
    }

    public function registro_proceso()
    {
        ini_set('display_errors', '1');
        ini_set('display_sturtup_erros', '1');
        error_reporting(E_ALL);
        echo 'Estoy dentro de la funcion registro_proceso';
        //var_dump($_POST);
        $require = require_once __DIR__ . '/../config/Usuario.php';
        if (!class_exists('Usuario')) {
            echo 'La clase Usuario no existe';
        } else {
            echo 'La clase Usuario SI existe<br>';
        }
        echo 'Hola estoy entrando en el require';
        $usuario_modelo = new Usuario();

        $nombre = $_POST['nombre'];
        $apellido = $_POST['surname'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $correo_existe = $usuario_modelo->getByEmail($email);
        var_dump($correo_existe);

        if ($correo_existe) {
            echo 'El correo ya está registrado';
        } else {
            echo 'El metodo insert se produce ODIO MI VIDAAAA';
            $exito = $usuario_modelo->insert(nombre: $nombre, apellido: $apellido, email: $email, password: $password);
            echo 'Resultado de \$exito: ';
            var_dump($exito);
            if ($exito) {
                echo 'Usuarioo registrado correctamente';
            } else {
                echo 'Usuario NO registrado';
            }
        }

    }
    public function inicio_proceso()
    {
        echo 'Post recibido';
        var_dump('$_POST');

        echo 'Acabas de iniciar sesion';
        ini_set('display_errors', '1');
        ini_set('display_sturtup_erros', '1');
        error_reporting(E_ALL);
        session_start();
        $require = require_once __DIR__ . '/../config/Usuario.php';
        $usuario_modelo = new Usuario();

        $email = $_POST['email'];
        $password = $_POST['password'];
        $usuario = $usuario_modelo->getByEmail($email);

        if ($usuario && password_verify($password, $usuario['password'])) {
            $_SESSION['usuario_nombre'] = $usuario['name'];
            $_SESSION['email'] = $usuario['email'];

            echo 'Has iniciado sesion con los siguientes parametros' . $_SESSION['usuario_nombre'] . ", tu email es " . $_SESSION['email'] . '';

        } else {
            echo 'Correo o contraseña incorrectos, prueba otra vez.';
        }
    }
    public function envio_mensaje()
    {
        //Reseteamos variables a 0.
        var_dump($_POST);

        $noum = $_POST['nombre'];
        $mail = $_POST['email'];
        $asunto = 'Formulario Rellenado';
        $mensaje = "Nombre: ".$noum."<br> Email: $mail<br> Mensaje:".$_POST['mensaje'];
    
    
        if(mail('gymphysicalservice@gmail.com', $asunto, $mensaje)){
            echo "Correo enviado con parametros" .$asunto;
        }

    }
    public function inicioSesion()
    {
        $this->load_view('signup');
    }

    public function logout()
    {
        session_destroy();
        echo 'Se ha cerrado la sesion';
    }

    public function update($id)
    {
        echo "Update view " . $id;
    }


}
?>