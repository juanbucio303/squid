<?php
  session_start();
  if (!isset($_SESSION["user"])) {
    header("Location:index.php");
    die();
  }elseif ($_SESSION['tipo']!=1) {
    header("Location:index.php");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <link rel="stylesheet" href="fonts/icons/material-icons.css"> -->
    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
    <script src="js/popper.js" charset="utf-8"></script>
    <script src="js/funciones.js" charset="utf-8"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        getAll();
        $("#cerrar_sesion").click(function(){
          $.post('core/Login/controller_login.php',{action:"cerrar_sesion"},function(){
            location.reload();
          });
        });

      });
      function getAll(){
        $.post('core/Administrador/controller_admin.php',{action:"getAll"},function(res){
          var datos=JSON.parse(res);
          var html="";
          console.log(datos);
          for (var i = 0; i < datos.length; i++) {
            var info=datos[i];
            html+="<tr><td>"+info['nombre_usuario']+"</td><td>"+info['nombre']+" "+info['ap']+" "+info['am']+"</td><td>"+info['ip_address']+"</td><td>"+info['mac_address']+"</td><td>"+info['desc_dispositivo']+"</td><td>"+info['desc_disp']+"</td></tr>";
          }
          $("#tab-res").html(html);
        });
      }
    </script>
  </head>
  <body>
    <?php require("nav-admin.php");?>
    <div class="table-responsive">

      <table class="table table-sm table-dark">
        <thead>
          <tr>
            <th>Nombre Usuario</th>
            <th>Nombre</th>
            <th>IP</th>
            <th>MAC</th>
            <th>Dispositivo</th>
            <th>Tipo</th>
          </tr>
        </thead>
        <tbody id="tab-res">

        </tbody>
      </table>
    </div>
  </body>
</html>
