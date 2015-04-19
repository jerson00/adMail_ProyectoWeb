<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Inicio - adMail</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;">
    <link href="/admail/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/admail/bootstrap/css/proyect.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="/admail/img/mail2.ico" type="image/png" />
  </head>
  <body>
    <div id='cssmenu'>
      <ul>
         <li class='active'><a href='http://localhost/admail/user/home'><img src="/admail/img/home-bluemin.png"/> INICIO</a></li>
         <li><a href='http://localhost/admail/user/new_msg'><img src="/admail/img/plus-blackmin.png"/> NUEVO</a></li>
         <li><a href='#'><img src="/admail/img/conf-blackmin.png"/> CONFIGURACIÓN</a></li>
         <li><a href='#'><img src="/admail/img/help-blackmin.png"/> AYUDA</a></li>
         <li id='user' float="rigth;"></li>
      </ul>
      </div>
      <div id="body-page">
         <div id="barmenu">
           <ul>
              <li><a href='#'>
                <button class="btn btn-primary" type="button"> Enviados 
                  <span class="badge">4</span>
                </button>
              </a></li>
              <li><a href='#'>
                <button class="btn btn-primary" type="button"> Bandeja de Salida 
                  <span class="badge">12</span>
                </button>
              </a></li>
           </ul>
      </div>
      <fieldset>
        <legend>ENVIADOS:</legend>
        <div id="list"><!-- action="user/recuperarDatos" -->
          <table>
            <?php
              $query = $this->db->query("SELECT * FROM tbl_user");
              echo "<table class=\"table table-hover\">"; /*border=1 cellpadding=4 cellspacing=0*/
                 echo "<tr>
                     <th> Tabla usuarios </th>
                   <tr>
                     <th> id </th><th> nombre </th><th> apellidos </th>
                     <th> correo </th><th> contrasena </th><th> correo_alternativo </th>
                     <th> verificada </th><th> codigo_confirmacion </th>
                  </tr>";
              foreach ($query->result() as $row)
              {

                 echo "<tr>" 
                         ."<td>".$row->id."</td>" 
                         ."<td>".$row->nombre."</td>" 
                         ."<td>".$row->apellidos."</td>" 
                         ."<td>".$row->correo."</td>" 
                         ."<td>".$row->contrasena."</td>"
                         ."<td>".$row->correo_alternativo."</td>"
                         ."<td>".$row->verificada."</td>"
                         ."<td>".$row->codigo_confirmacion."</td>"
                         ."</tr>"; 
              }
              echo "</table>";
            ?>
          </table>
        </div>
      </fieldset>
    </div>
  </body>
</html>