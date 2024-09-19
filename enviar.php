<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Aquí puedes agregar la lógica para enviar el correo o guardar los datos
    mail("tu_email@ejemplo.com", "Nuevo mensaje de contacto", $mensaje, "From:" . $email);
    echo "Mensaje enviado!";
}
?>
