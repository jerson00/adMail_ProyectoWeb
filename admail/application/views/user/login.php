  <body>
  <form class="formulario" method="POST" action="<?php echo site_url('user/authenticate'); ?>">
    <div class="container-fluid" id="log-div">
        <h1><img src="/admail/img/mail.png"></h1>
         <div class="input-group" id="form-log">
          <span class="input-group-addon" id="basic-addon1"><img src="/admail/img/user-gray-min.png";></span>
          <input type="text" class="form-control" name="correo" placeholder="Usuario"/>
          </div>
        <div class="input-group" id="form-log">
          <span class="input-group-addon" id="basic-addon1"><img src="/admail/img/pass-gray.png";></span>
          <input type="password" class="form-control" name="contrasena" placeholder="Contraseña"/>
        </div>
        <form class="ingresar" method="POST" action="<?php echo site_url('user/authenticate'); ?>">
          <input type="submit" class="btn btn-primary" id="btn-log" value="Entrar"></input>
        </form>
        
        <a href="http://localhost/admail/user/register" target="_self">
          <button type="button" class="btn btn-success" id="btn-log"><strong>Registrarse</strong></button>
        </a>
    </div>
    </form>