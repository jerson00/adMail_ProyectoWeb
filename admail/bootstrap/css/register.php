<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title><!--<?php #echo $title; ?>-->

    <!-- Bootstrap -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="proyect.css" rel="stylesheet">

  </head>
  <body>
    <form id="reg-div" action="http://localhost/admail/index.php/user/login">
      <div class="page-header">
        <h2 id="title-log">Registrarse</h2>
      </div>
      <div class="page-header">
        <h4 id="title-log">Digite su información personal</h4>
        <div class="input-group" id="form-log">
          <span class="input-group-addon" id="basic-addon1"><img src="/admail/img/user-gray-min.png";></span>
          <input type="text" class="form-control" placeholder="First Name">
        </div>
        <div class="input-group" id="form-log">
          <span class="input-group-addon" id="basic-addon1"><img src="/admail/img/user-gray-min.png";></span>
          <input type="text" class="form-control" placeholder="Last Name">
        </div>
      </div>
      <div>
        <h4 id="title-log">Digite la información de su cuenta</h4>
        <div class="input-group" id="form-log">
          <span class="input-group-addon" id="basic-addon1"><img src="/admail/img/arroba.png";></span>
          <input type="email" class="form-control" placeholder="E-mail Address">
        </div>
        <div class="input-group" id="form-log">
          <span class="input-group-addon" id="basic-addon1"><img src="/admail/img/user-gray-min.png";></span>
          <input type="text" class="form-control" placeholder="User Name || example@webmail.com">
        </div>
        <div class="input-group" id="form-log">
          <span class="input-group-addon" id="basic-addon1"><img src="/admail/img/pass-gray.png";></span>
          <input type="password" class="form-control" placeholder="New Password">
        </div>
        <div class="input-group" id="form-log">
          <span class="input-group-addon" id="basic-addon1"><img src="/admail/img/pass-gray.png";></span>
          <input type="password" class="form-control" placeholder="Confirm Password">
        </div>
      </div>
      <button type="submit" class="btn btn-primary" id="btn-log">Confirmar</button>
    </form>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/assets/js/bootstrap.min.js"></script>
  </body>
</html>