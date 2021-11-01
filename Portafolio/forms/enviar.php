<?php
    $destino="jorgetriana1951@gmail.com";
    $nombre = $_POST["name"];
    $correo = $_POST["email"];
    $asunto = $_POST["subject"];
    $mensaje = $_POST["message"];
    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;
    mail($destino,"Contacto", $contenido);
    header("Location:gracias.php");
?>