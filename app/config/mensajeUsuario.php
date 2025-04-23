<?php
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos POST
    $name = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $message = isset($_POST['message']) ? strip_tags(trim($_POST['message'])) : '';

    // Validar campos del formulario
    if (empty($name)) {
        $errors[] = 'El nombre está vacío';
    }

    if (empty($email)) {
        $errors[] = 'El email está vacío';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'El email no es válido';
    }

    if (empty($message)) {
        $errors[] = 'El mensaje está vacío';
    }

    // Si no hay errores, enviar email
    if (empty($errors)) {
        // Dirección de email del destinatario (reemplace con la suya)
        $recipient = "gymphysicalservice@gmail.com";

        // Encabezados adicionales
        $headers = "From: $name <$email>";

        // Enviar email
        if (mail($recipient, $message, $headers)) {
            echo "¡Email enviado exitosamente!";
        } else {
            echo "Error al enviar el email. Por favor, inténtelo más tarde.";
        }
    } else {
        // Mostrar errores
        echo "El formulario contiene los siguientes errores:<br>";
        foreach ($errors as $error) {
            echo "- $error<br>";
        }
    }
} else {
    // No es una solicitud POST, mostrar error 403 forbidden
    header("HTTP/1.1 403 Forbidden");
    echo "No tiene permiso para acceder a esta página.";
}
?>