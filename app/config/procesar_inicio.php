<?php
// Incluir el archivo de conexión
require "connection.php";
//inicio de seesion en el mismo archivo de procesar para poder interactuar con la base dee datos
//https://www.php.net/manual/es/function.isset.php de aqui estoy sacando el porque se usa isset() en php para comprobar si  un valor es definido y no null
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['InicioSesion'])) {
    $username = $_POST["nombreDeUsuario"];
    $password = $_POST['password'];

    try {

        // Preparar la consulta
        // Importante que sea dos puntos al final para indicar el parámetro
        $sql = "SELECT password FROM users WHERE name = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":username", $username);
    
        // Ejecutar la consulta
        if ($stmt->execute()) {
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($usuario && password_verify($password, $usuario["password"])) {
                echo "Inicio de sesión de puta madre";
                session_start();
                echo "Se ha creado la sesion"; 
                $_SESSION['usuario'] =  $username;
                echo 'el nombre es: '. $_SESSION['usuario'];
            } else {
                echo "Error al iniciar sesión IMBECIL";
                print_r($stmt->errorInfo());
            }
        } else {
            echo "Error al ejecutar la consulta, VAMOS QUE NO VA LA CONSULTA";
            print_r($stmt->errorInfo());
        }
    } catch (PDOException $e) {
        echo "Error al iniciar sesión.GILIPOLLAS La causa es: " . $e->getMessage();
    }
}  
?>