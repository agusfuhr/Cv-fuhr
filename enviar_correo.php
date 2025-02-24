<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);
    
    // Dirección de correo donde quieres recibir los mensajes
    $destinatario = "agustin.fuhr@gmail.com";
    $asunto = "Nuevo mensaje de contacto";
    
    // Cuerpo del mensaje
    $cuerpo = "
    <html>
    <head>
        <title>Mensaje de Contacto</title>
    </head>
    <body>
        <p><strong>Nombre:</strong> $nombre</p>
        <p><strong>Correo:</strong> $email</p>
        <p><strong>Mensaje:</strong><br> $mensaje </p>
    </body>
    </html>
    ";

    // Encabezados para enviar el correo en formato HTML
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: <$email>" . "\r\n";  // El correo del remitente
    
    // Enviar el correo
    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        echo "<script>alert('¡Mensaje enviado exitosamente!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Hubo un error al enviar el mensaje. Por favor, inténtalo nuevamente.'); window.location.href='index.html';</script>";
    }
}
?>
