<?php
if (isset($_POST['submit'])) {
    //ini_set( 'display_errors', 1 ); # REMOVE // FOR DEBUG
    //error_reporting( E_ALL ); # REMOVE // FOR DEBUG
    $from = "contacto@iccleloir.com.ar"; // Email con el dominio del Hosting para evitar SPAM
    $fromName = "RPF-WEB"; // Nombre que saldrá en el email recibido
    $to = "info@iccleloir.com.ar"; // Dirección donde se enviará el formulario
    $subject = $_POST['Tema']; // Asunto del Formulario

    /* Componemos el mensaje */
    $fullMessage = "Hola! " . $to . "\r\n";
    $fullMessage .= $_POST['Nombre'] . " " . " te ha enviado un mensaje:\r\n";
    $fullMessage .= "\r\n";
    $fullMessage .= "Nombre: " . $_POST['Nombre'] . "\r\n";
    $fullMessage .= "Dni: " . $_POST['Dni'] . "\r\n";
    $fullMessage .= "E-Mail: " . $_POST['Email'] . "\r\n";
    $fullMessage .= "Teléfono: " . $_POST['Telefono'] . "\r\n";
    $fullMessage .= "Tema: " . $_POST['Tema'] . "\r\n";
    
    $fullMessage .= "Mensaje: " . $_POST['Mensaje'] . "\r\n";
    $fullMessage .= "\r\n";
    $fullMessage .= "Saludos!\r\n";

    /* Creamos las cabeceras del Email */
    $headers = "Organization: RPF WEB\r\n";
    $headers .= "From: " . $fromName . "<" . $from . ">\r\n";
    $headers .= "Reply-To: " . $_POST['Email'] . "\r\n";
    $headers .= "Return-Path: " . $to . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n";

    /* Enviamos el Formulario*/
    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "<center><h2 style=color:#0078FF; font-family: 'Montserrat', sans-serif;>Su consulta se ha enviado correctamente!</h2></center>";
    } else {
        echo "<center><h2 style=color:#0078FF; font-family: 'Montserrat', sans-serif;>Ops ! El envío de su consulta ha fallado. Por favor intente nuevamente!</h2></center>S";
    }
}
?>

<style>
button {
   padding: 10px;
   color: white;
   background-color:rgba(123, 172, 57, 0.9)
}
</style>
<a href="index.html"><button style="background-color:rgba(123, 172, 57, 0.9);color:white; display:block; margin:auto;" type="button">Volver al Inicio</button></a>