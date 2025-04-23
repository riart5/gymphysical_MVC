<?php
// Incluir el archivo de conexión
require "connection.php";

// Verificar si los datos fueron enviados por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["email"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Encriptar la contraseña con un hash

    try {
        // Preparar la consulta
        $sql = "INSERT INTO users (name, password, email, surname)VALUES( $nombre,$password, $correo,$apellido)";
        $stmt = $conn->prepare($sql);

        // Asignar valores
        $stmt->bindParam(":email", $correo);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":name", $nombre);
        $stmt->bindParam(":surname", $apellido);
        // Ejecutar la consulta
        if($stmt->execute()) {
            echo "Registro de puta madre";
        } else {
            echo "Error al registrar";
            print_r( $stmt->errorInfo());
        }
    } catch (PDOException $e) {
        echo "Error al registrar: " . $e->getMessage();
    }
}
?>