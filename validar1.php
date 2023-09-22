<?php
if (isset($_POST['submit'])) {
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['telefono'];

    if (empty($nombre)) {
        echo "<p class='error'> Agrega un nombre </p>";
    } //elseif (strlen($nombre) > 15) {
    //echo "<p class='error'> * El nombre es muy largo </p>";
    else {
        if (strlen($nombre) > 15) {
            echo "<p class='error'> * El nombre es muy largo </p>";
        }
    }
    if (empty($email)) {
        echo "<p class='error'> Agrega un email </p>";
        // (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //echo "<p class='error'> * El email es incorrecto </p>";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p class='error'> * El email es incorrecto </p>";
        }
    }
    if (empty($tel) && ($tel < 8)) {
        echo "<p class='error'> Agrega un telefono. El telefono debe tener mas de 8 digitos. </p>";
    } //elseif (!is_numeric($tel)) {
    //echo "<p class='error'> * El telefono debe ser un numero. </p>";
    else {
        if (!is_numeric($tel)) {
            echo "<p class='error'> * El telefono debe ser un numero. </p>";
        }
        //echo "<p class='error'> * Dato correcto </p>";
    }

    //if (($tel) && ($nombre) && ($email)) {
    //(include("../php_IFTS4/gracias.html"));
    //}
    //if (($telOK > 0) && ($nombreOK > 0) && ($emailOK > 0)) {
    //include("../php_IFTS4/gracias.html"); //}
}
if (isset($_POST['submit']) && (is_numeric($tel)) && ($tel < 8) && ($nombre) && ($email)) {
    (include("../php_IFTS4/gracias.html"));
}

//if (($tel > 0) && ($nombre > 0) && ($email > 0)) {
//  (include("../php_IFTS4/gracias.html"));
//}
//&& (is_numeric($tel)) && ($tel < 8) && ($nombre) && ($email))


//else {
//if (isset($_POST['submit'])) {
//  (include("../php_IFTS4/gracias.html"));
//}
//}
/*if  (($tel > 0) && ($nombre > 0) && ($email > 0)) {
    echo "El ingreso fue correcto ";
}*/

?>