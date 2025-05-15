<?php
require_once APP . '/config/connection.php';
//aqui encontramos todas las funciones necesarias para hacer querys a la base de datos y poder llamarlas desde otro lado del proyecto asi teniendo todo mas organizado
class Usuario
{

    private $pdo;

    public function __construct()
    {
        $this->pdo = getConnection();
    }

    public function getByEmail($email)
    {
        $sql = 'SELECT * FROM users WHERE email = :email';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($nombre, $apellido, $email, $password)
    {
        $sql = "INSERT INTO users (name, surname, email, password) VALUES (:nombre, :apellido, :email, :password)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":apellido", $apellido);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);

        if (!$stmt->execute()) {
            print_r($stmt->errorInfo());
            return false;
        }
        return true;
    }


    public static function guardarEjercicio($usuario_id, $ejercicio, $kg, $series, $repeticiones)
    {
        $conn = getConnection();
        $sql = "INSERT INTO entrenamientos (nombre_ejercicio, usuario_id, fecha, kg, repeticiones, series) VALUES (:nombre_ejercicio, :usuario_id, NOW(), :kg, :series, :repeticiones)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':usuario_id', $usuario_id);
        $stmt->bindParam(':nombre_ejercicio', $ejercicio);
        $stmt->bindParam(':kg', $kg);
        $stmt->bindParam(':series', $series);
        $stmt->bindParam(':repeticiones', $repeticiones);


        if (!$stmt->execute()) {
            //var_dump($stmt);
            print_r($stmt->errorInfo());
            return false;
        }
        return true;
    }


    public static function obtenerEntrenamiento($usuario_id)
    {
        $conn = getConnection();
        $stmt = $conn->prepare("SELECT id, nombre_ejercicio, series, repeticiones, kg FROM entrenamientos WHERE usuario_id = :uid ORDER BY fecha DESC");
        $stmt->bindParam(':uid', $usuario_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public static function actualizarEjercicio($ejercicio_id, $kg, $series, $repeticiones)
    {
        $conn = getConnection();
        $stmt = $conn->prepare("UPDATE entrenamientos SET kg = :kg, series = :series, repeticiones = :reps WHERE id = :id");
        $stmt->bindParam(':kg', $kg);
        $stmt->bindParam(':series', $series);
        $stmt->bindParam(':reps', $repeticiones);
        $stmt->bindParam(':id', $ejercicio_id);
        return $stmt->execute();
    }

    public static function eliminarEjercicio($ejercicio_id)
    {
        $conn = getConnection();
        $stmt = $conn->prepare("DELETE FROM entrenamientos WHERE id = :eid");
        $stmt->bindParam(':eid', $ejercicio_id);
        return $stmt->execute();
    }

    public static function vaciarEntrenamiento($usuario_id)
    {
        $conn = getConnection();
        $stmt = $conn->prepare("DELETE FROM entrenamientos WHERE usuario_id = :uid");
        $stmt->bindParam(':uid', $usuario_id);
        return $stmt->execute();
    }

    public static function obtenerEjercicioPorId($usuario_id, $ejercicio_id): mixed
    {
        $conn = getConnection();
        $stmt = $conn->prepare("SELECT * FROM entrenamientos WHERE id = :id AND usuario_id = :uid");
        $stmt->bindParam(':id', $ejercicio_id);
        $stmt->bindParam(':uid', $usuario_id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function modificarEjercicio($id, $nombre, $series, $repeticiones, $kg): bool
    {
        $conn = getConnection();
        $stmt = $conn->prepare("UPDATE entrenamientos SET nombre_ejercicio = :nombre, series = :series, repeticiones = :repeticiones, kg = :kg WHERE id = :id");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':series', $series);
        $stmt->bindParam(':repeticiones', $repeticiones);
        $stmt->bindParam(':kg', $kg);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public static function obtenerEntrenamientoAgrupadoPorFecha($usuario_id): array
    {
        $conn = getConnection();
        $stmt = $conn->prepare("SELECT id, nombre_ejercicio, series, repeticiones, kg, DATE(fecha) as fecha FROM entrenamientos WHERE usuario_id = :uid ORDER BY fecha DESC");
        $stmt->bindParam(':uid', $usuario_id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $agrupado = [];
        foreach ($result as $e) {
            $fecha = $e['fecha'];
            if (!isset($agrupado[$fecha])) {
                $agrupado[$fecha] = [];
            }
            $agrupado[$fecha][] = $e;
        }
        return $agrupado;
    }

    public static function obtenerDatosPorFecha($usuario_id, $fecha)
    {
        $conn = getConnection();
        $stmt = $conn->prepare("SELECT nombre_ejercicio, series, repeticiones, kg
        FROM entrenamientos
        WHERE usuario_id = :usuario_id AND DATE(fecha) = :fecha");
        $stmt->bindParam(':usuario_id', $usuario_id);
        $stmt->bindParam(':fecha', $fecha);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getEntrenamientoPorFecha($usuario_id, $fecha) {
        $conn = getConnection();
        $stmt = $conn->prepare("SELECT nombre_ejeercicio, kg, series, repeticiones FROM entrenamientos WHERE usuario_id = :uid AND DATE(fecha) = :fecha");
        $stmt->bindParam(':uid', $usuario_id);
        $stmt->bindParam(':fecha', $fecha);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
