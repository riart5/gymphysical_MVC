<?php
/*Este va a ser el AuthController.php, las razones son las siguientes, estabamos usando un procesar_inicio o un procesar.php para poder gestionar el registro y el login 
de nuestra pagina, el problema es que rompemos la logica del modelo vista conrolador
- Entonces hay que crear un controlador para la autentifcacion 
- Metodes que volem utiltzar 
1- Inciar sesio
2- Registrar usuari
3- Fer logout*/
/*
require_once '../app/config/User.php';

class AuthController {

    //muestra el formulario de login
    public function procesar_inicio() {
        session_start();

        $usuario_modelo = new Usuario();

        $email = $_POST['email'];
        $password = $_POST['password'];
        $usuario = $usuario_modelo->getByEmail($email);

        if ($usuario && password_verify($password, $usuario['password'])) {
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_email'] = $usuario['email'];

        } else {
            echo'Correo o contraseña incorrectos, prueba otra vez.';
        }
    }

    public function registrar() {
        require '../views/pages/registro.php';
    }

    public function procesar_registro() {
        $usuario_modelo = new Usuario();

        $nombre = $_POST['nombre'];
        $apellido = $_POST['surname'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $correo_existe = $usuario_modelo->getByEmail($email);

        if ($correo_existe) {
            echo'El correo ya está registrado';
        } else {
            $exito = $usuario_modelo->INSERT($nombre, $apellido, $email, $password);
            if ($exito) {
                echo 'Aqui deberia redirigir a la web cuando incias sesion';
            } else {
                echo 'NO se ha registrado el usuario, ha habido un error';
            }
        }
    }

    //Aqui para cerrar sesion
    public function logout() {
        session_start();
        session_destroy();
        echo'Se ha cerrado la sesion';
}
}

*/

?> 