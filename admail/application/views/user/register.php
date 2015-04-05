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
    <form id="reg-div" method="POST" action="<?php echo site_url('user/insert'); ?>">
      <div class="page-header">
         <h1><img src="/admail/img/mail.png"></h1>
      </div>
      <div class="alerta">
        <div class="alert alert-success">Datos registrados correctamente</div>
        
      </div>
      <div class="page-header">
        <h4 id="title-log">Digite su información personal</h4>
        <div class="input-group" id="form-log">
          <span class="input-group-addon" id="basic-addon1"><img src="/admail/img/user-gray-min.png";></span>
          <input type="text" class="form-control" placeholder="Nombre" name="nombre">
        </div>
        <div class="input-group" id="form-log">
          <span class="input-group-addon" id="basic-addon1"><img src="/admail/img/user-gray-min.png";></span>
          <input type="text" class="form-control" placeholder="Apellidos" name="apellidos">
        </div>
      </div>
      <div>
        <h4 id="title-log">Digite la información de su cuenta</h4>
        <div class="input-group" id="form-log">
          <span class="input-group-addon" id="basic-addon1"><img src="/admail/img/arroba.png";></span>
          <input type="email" class="form-control" placeholder="ejemplo01@admail.com" name="correo">
        </div>
        <div class="input-group" id="form-log">
          <span class="input-group-addon" id="basic-addon1"><img src="/admail/img/pass-gray.png";></span>
          <input type="password" class="form-control" placeholder="Contraseña" name="contrasena">
        </div>
        <div class="input-group" id="form-log">
          <span class="input-group-addon" id="basic-addon1"><img src="/admail/img/pass-gray.png";></span>
          <input type="password" class="form-control" placeholder="Confirmar Contraseña" name="confirm_contrasena">
        </div>
        <div class="input-group" id="form-log">
          <span class="input-group-addon" id="basic-addon1"><img src="/admail/img/arroba.png";></span>
          <input type="email" class="form-control" placeholder="Correo alternativo" name="correo_alternativo">
        </div>
      </div>
      <input type="submit" class="btn btn-primary" id="btn-log" action="user/insert" value="Guardar"></input>
    </form>
  </body>
</html>