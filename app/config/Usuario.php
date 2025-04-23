<?php
require_once "connection.php";
class Usuario {
    private $pdo;
    public function __construct() {
        $this->pdo = getConnection(); //aqui llama a la funcion de conexion PDO (artur)
    }

    public function getByEmail($email) {
        $sql = 'SELECT * FROM users WHERE email = :email';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);

    }

    public function insert($nombre, $apellido, $email, $password) {
        $sql = "INSERT INTO users (name, surname, email, password) VALUES (:nombre, :surname, :email, :password)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":surname", $apellido);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        
        if (!$stmt->execute()) {
            print_r($stmt->errorInfo());
            return false;
        }
        echo"El insert ha funbcionado correctamente!!";
        return true;
    }
}