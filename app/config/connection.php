<?php
function getConnection() {
$servername = "localhost";
//$servername = getenv("servername", 0); //lo deejamos comentado porque en realidad se deberia implementar esta medida de seguridad pero por falta de tiempo descartamos esta idea proporcionada por el Albert
$username = "gym";
$password = "qwerty";
$dbname = "GymPhysical";

// pruebo con quitar esto porque al usar PDO no hace falta hacer un new mysqli
// $conn = new mysqli($servername, $username, $password, $dbname);

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn; //si no hago esta linia no me funcionara ya que es clave que me devuelva la connexion
} catch(PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
}
