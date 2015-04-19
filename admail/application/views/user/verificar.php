  <body>
  <form class="formulario" method="POST" action="<?php echo site_url('user/verificacion'); ?>">
    <div class="container-fluid" id="log-div">
        <h1><img src="/admail/img/mail.png"></h1>
         <div class="input-group" id="form-log">
          <span class="input-group-addon" id="basic-addon1"><img src="/admail/img/user-gray-min.png";></span>
          <input type="text" class="form-control" name="correo" placeholder="Digite su correo"/>
          </div>

           <div class="input-group" id="form-log">
          <span class="input-group-addon" id="basic-addon1"><img src="/admail/img/pass-gray.png";></span>
          <input type="text" class="form-control" name="codigo" placeholder="Digite su codigo de verificación"/>
          </div>

        <form class="ingresar" method="POST" action="<?php echo site_url('user/verificacion'); ?>">
          <input type="submit" class="btn btn-primary" id="btn-log" value="Verificar Cuenta"></input>
        </form>
    </div>
    </form>