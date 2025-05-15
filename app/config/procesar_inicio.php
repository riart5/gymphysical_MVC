<?php
require "connection.php";
//este es el documento que procesa el inicio de sesion como se puede ver con la query a la base de datos
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['InicioSesion'])) {
    $username = $_POST["nombreDeUsuario"];
    $password = $_POST['password'];

    try {
        $sql = "SELECT id, name, email, password FROM users WHERE name = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":username", $username);
        $stmt->execute();
        
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        var_dump($usuario);die;
        if ($usuario && password_verify($password, $usuario["password"])) {
            session_start();

            $_SESSION['usuario'] = $usuario['name'];
            $_SESSION['usuario_email'] = $usuario['email'];
            $_SESSION['usuario_id'] = $usuario['id'];

            header("Location: /producto"); 
            exit;
        }
    } catch (PDOException $e) {
        echo "Error al iniciar sesión: " . $e->getMessage();
    }
}
