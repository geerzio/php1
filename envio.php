<?php

$destino = "depos.fl@gmail.com";
$nombre = $_POST["name"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

$contenido = "Nombre:" . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;
mail($destino, "Contacto", $contenido);
header("Location:gracias.php");





?>