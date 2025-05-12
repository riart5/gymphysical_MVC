<?php
//estaa funcionalidad es MUY IMPORTANTE, yaa que es la logica que hace que cargue un header depenndiendo de la session si esta iniciada 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['usuario_email'])) {
    require_once APP . '/views/inc/header_inicio.php'; 
} else {
    require_once APP . '/views/inc/header.php'; 
}
?>
