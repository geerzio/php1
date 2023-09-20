<?php

$nombre = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_STRING);
$texto = filter_var($_POST['mensaje'], FILTER_SANITIZE_STRING);

if (!empty($nombre) && !empty($email) && !empty($telefono)) {

    $destino = 'depos.fl@gmail.com';
    $asunto = 'Email de prueba';

    $cuerpo = '
        <html>
            <head>
                <title> Prueba de correo </title>
            <head>
            <body>
                <h1> Email de: ' . $nombre . ' </h1>
                <p> ' . $texto . '</p>
            </body>
        </html>
    ';

    // formato html 
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";

    //direccion del remitente
    $headers .= "From $nombre <$email>\r\n";

    // ruta del msj desde origen a destino
    $headers .= "Return-path: $destino\r\n";

    mail($destino, $asunto, $cuerpo, $headers);

    echo "Email enviado correctamente";

} else {
    echo "Error al enviar el email";
}


?>