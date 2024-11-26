<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "cvielma67@gmail.com"; // Cambia esto al correo del destinatario
    $subject = "Nuevo mensaje de contacto de " . $name;
    $body = "Nombre: $name\nEmail: $email\n\nMensaje:\n$message";

    // Agrega más encabezados
    $headers = "From: cvielma@outlook.com\r\n";
    $headers .= "Reply-To: virginiadel1947@gmail.com\r\n"; // Reply-To será la dirección del remitente original
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n"; // Define el formato del mensaje

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Error al enviar el mensaje.";
    }
} 
?>
