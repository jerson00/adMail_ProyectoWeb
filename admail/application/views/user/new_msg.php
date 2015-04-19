<div id='cssmenu'>
  <ul>
     <li><a href='http://localhost/admail/user/home'><img src="/admail/img/home-blackmin.png"/> HOME</a></li>
     <li class='active'><a href='http://localhost/admail/user/new_msg' ><img src="/admail/img/send-bluemin.png"/> NUEVO</a></li>
     <li><a href='#'><img src="/admail/img/conf-blackmin.png"/> CONFIGURACIÓN</a></li>
     <li><a href='#'><img src="/admail/img/help-blackmin.png"/> AYUDA</a></li>
     <li id='user' float="rigth;"></li>
  </ul>
  </div>
   <form class="formulario" method="POST" action="<?php echo site_url('email/enviar'); ?>">
  	<div id="new">
  		<div id="send-to">
        <div>
          <input type="text" class="form-control" name="para" placeholder="Para">
          <input type="text" class="form-control" name="asunto" placeholder="Asunto">
          <input type="submit" class="btn btn-info" value="ENVIAR" action="<?php echo site_url('email/enviar'); ?>">
        </div>
  		</div>
  		<div id="txt_area">
  	<textarea  name="text"></textarea>
  </div>
  </form>
</div>