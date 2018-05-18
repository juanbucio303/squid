<?php
  session_start();
  if (!isset($_SESSION['user'])) {
    header('Location:index.php');
  }
  if ($_SESSION['tipo']!=2) {
    header('Location:index.php');
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title> Usuarios</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <!-- <link rel="stylesheet" href="fonts/icons/material-icons.css"> -->
    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
    <script src="js/popper.js" charset="utf-8"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        getInfo();
        $("#cerrar_sesion").click(function(){
          window.location.href="index.php";
        });
        $("#cerrar_sesion").click(function(){
          $.post("core/Login/controller_login.php",{action:"cerrar_sesion"});
        });
      });
      function getInfo(){
        $.post("core/Usuarios/controller_usuarios.php",{action:"getDatos"},function(res){
          var datos = JSON.parse(res);
          // var info="";
          console.log(datos);

            // var info=datos[i];
            var html='<tr><td>'+datos['desc_dispositivo']+'</td><td>'+datos['ip_address']+'</td><td>'+datos['mac_address']+'</td><td>'+datos['desc_disp']+'</td></tr>';
            $("#resp_info").html(html);

        });
      }
    </script>
  </head>
  <body>
    <?php require('nav-bar.php') ?>
    <div class="container padding">
      <div class="col-md-offset-4">
        <div class="card text-center">
          <div class="card-header" id="saludo">
            Buen dia <?php echo $_SESSION["name"]; ?>
          </div>
          <div class="card-body table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Dispositivo</th>
                  <th>IP</th>
                  <th>MAC</th>
                  <th>tipo</th>
                  <th></th>
                </tr>
              </thead>
              <tbody id="resp_info">

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
