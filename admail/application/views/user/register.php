<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrarse - adMail</title>

    <link href="/admail/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admail/bootstrap/css/proyect.css" rel="stylesheet">
    <link rel="shortcut icon" href="/admail/img/mail2.ico" type="image/png" />

  </head>
  <body>
    <form id="reg-div" action="http://localhost/admail/index.php/user/login">
      <div class="page-header">
         <h1><img src="/admail/img/mail.png"></h1>
      </div>
      <div class="page-header">
        <h4 id="title-log">Digite su información personal</h4>
        <div class="input-group" id="form-log">
          <span class="input-group-addon" id="basic-addon1"><img src="/admail/img/user-gray-min.png";></span>
          <input type="text" class="form-control" placeholder="Nombre">
        </div>
        <div class="input-group" id="form-log">
          <span class="input-group-addon" id="basic-addon1"><img src="/admail/img/user-gray-min.png";></span>
          <input type="text" class="form-control" placeholder="Apellidos">
        </div>
      </div>
      <div>
        <h4 id="title-log">Digite la información de su cuenta</h4>
        <div class="input-group" id="form-log">
          <span class="input-group-addon" id="basic-addon1"><img src="/admail/img/arroba.png";></span>
          <input type="email" class="form-control" placeholder="ejemplo01@admail.com">
        </div>
        <div class="input-group" id="form-log">
          <span class="input-group-addon" id="basic-addon1"><img src="/admail/img/pass-gray.png";></span>
          <input type="password" class="form-control" placeholder="Contraseña">
        </div>
        <div class="input-group" id="form-log">
          <span class="input-group-addon" id="basic-addon1"><img src="/admail/img/pass-gray.png";></span>
          <input type="password" class="form-control" placeholder="Confirmar Contraseña">
        </div>
      </div>
      <button type="submit" class="btn btn-primary" id="btn-log">Guardar</button>
    </form>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/assets/js/bootstrap.min.js"></script>
  </body>
</html>