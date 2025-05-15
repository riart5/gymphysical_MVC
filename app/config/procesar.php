<?php
require "connection.php";

// Verificar si los datos fueron enviados por POST IMPORTANTE IZAN
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["email"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Encriptar la contraseña con un hash, funcion basica de php

    try {
        // preparamos la consulta 
        $sql = "INSERT INTO users (name, password, email, surname)VALUES( $nombre,$password, $correo,$apellido)";
        $stmt = $conn->prepare($sql);

        // Asignar valores de cada parametro necesario
        $stmt->bindParam(":email", $correo);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":name", $nombre);
        $stmt->bindParam(":surname", $apellido);
        // finalmente ejecutamos la consulta
        if($stmt->execute()) {
            //echo "Registro completado";
        } else {
            echo "Error al registrar";
            print_r( $stmt->errorInfo());
        }
    } catch (PDOException $e) {
        echo "Error al registrar: " . $e->getMessage();
    }
}
?>