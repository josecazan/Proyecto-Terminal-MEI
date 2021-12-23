<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device=width, user-scalable=no,
    initial-scale=1.0, maximum-scale=1.0, minimum-scale= 1.0">
    <title>Iniciar Sesión</title>
  </head>
  <link rel="stylesheet" href="css/login.css">
  <body class="align">

    <div class="login">

      <header class="login__header">
        <center>
        <img src="imgs/logo.png" alt="" >
        </center>
        <h2>Sistema de Gestión de Tickets y Mantenimientos</h2>
      </header>

      <form action="login.php" class="login__form" method="POST">

        <div>
          <label for="email">Usuario</label>
          <input type="email" id="mail" name="mail" placeholder="@ucaribe.edu.mx">
        </div>

        <div>
          <label for="password">Contraseña</label>
          <input type="password" id="password" name="password" placeholder="contraseña">
        </div>

        <div>
          <input class="button" type="submit" value="Iniciar Sesión">
        </div>

      </form>

    </div>

  </body>

</html>
