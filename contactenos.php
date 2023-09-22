<?php
if (isset($_POST['submit'])) {
  $nombre = $_POST['name'];
  $email = $_POST['email'];
  $tel = $_POST['telefono'];

}

//<?php echo htmlspecialchars($_SERVER['PHP_SELF'])

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="contactenos.css" />
  <title>Página de Contacto</title>
</head>

<body>
  <div class="content">
    <h1 class="logo">Contacto</h1>

    <div class="contact-wrapper">
      <div class="contact-form">
        <h3>Contactese</h3>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
          <p>
            <label for=""> Nombre </label>
            <input type="text" name="name" id="fullname" value="<?php if (isset($nombre))
              echo $nombre ?>" />
            </p>
            <p>
              <label for="">Email</label>
              <input type="email" name="email" value="<?php if (isset($email))
              echo $email ?>" />
            </p>
            <p>
              <label for="">Telefono</label>
              <input type="tel" name="telefono" value="<?php if (isset($tel))
              echo $tel ?>" />
            </p>
            <p class="block">
              <label for="">Mensaje</label>
              <textarea name="mensaje" id="" rows="3"></textarea>
            </p>
            <p class="block">
              <button type="submit" name="submit">Send</button>
            </p>
            <?php
            //include("validar-form.php");
            include("validar1.php");

            ?>
        </form>
      </div>
      <div class="contact-info">
        <h4>Mas informacion</h4>
        <ul>
          <li>Calle falsa 123</li>
          <i>Telefono : 46415858</i>
          <i>Emal: Depos@fl.com.ar</i>
          <p>
            Logisticis Freedom es una empresa que brinda el mejor servicio de
            atención, ventas y postventa por eso, este espacio es para que
            nuestro cliente este cerca nuestro y pueda contactarnos
          </p>
        </ul>
      </div>
    </div>
  </div>

</html>