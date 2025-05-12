<?php 
//aquest fragment es super important ja que elimina un error que donava al detectar un altre session, basicament fa que la carregui de nou pero s'ha de possar a totes les pagines on fagi falta
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
require_once '../app/init.php';
$init = new Core;

?>
