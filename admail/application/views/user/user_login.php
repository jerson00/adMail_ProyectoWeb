<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Login - adMail</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;">
    <link href="/admail/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/admail/bootstrap/css/proyect.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="/admail/img/mail2.ico" type="image/png" />

  </head>

  <body>

    <div class="container-fluid" id="log-div">
        <h1><img src="/admail/img/mail.png"></h1>
        <form class="input-group" id="form-log">
          <span class="input-group-addon" id="basic-addon1"><img src="/admail/img/user-gray-min.png";></span>
          <input type="text" class="form-control" name="username" placeholder="Usuario"/>
        </form>
        <form class="input-group" id="form-log">
          <span class="input-group-addon" id="basic-addon1"><img src="/admail/img/pass-gray.png";></span>
          <input type="password" class="form-control" name="pass" placeholder="Contraseña"/>
        </form>
        <button type="button" class="btn btn-primary" id="btn-log"><strong>Entrar</strong></button>
        <a href="http://localhost/admail/index.php/user/register" target="_self">
          <button type="button" class="btn btn-success" id="btn-log"><strong>Registrarse</strong></button>
        </a>
    </div>

  </body>
</html>