<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title> SQUID</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <link rel="stylesheet" href="fonts/icons/material-icons.css"> -->
    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
    <script src="js/popper.js" charset="utf-8"></script>
    <script src="js/funciones.js" charset="utf-8"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#forregistro").hide();
        $("#alerta").hide();
        $("#ingresar").click(function(){
          var username=$("#usuario").val();
          var contra=$("#pass").val();
          $.post("core/Login/controller_login.php",{action:"ingresar",nombre_user:username,pass:contra},function(res)
          {
            $("#error").html(res);
            $("#alerta").show();

          });
        });

      });

    </script>
  </head>
  <body id="body1">
    <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alerta">
      <strong id="error"></strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="container" id="box-login" >
        <div class="row" >
          <div id="forregistro">
            <?php require("registro.php"); ?>
          </div>
          <div class="col-md-4">

          </div>
          <div id='quitar' class="card text-center col-md-4 collapse show" aria-labelledby="box-login" >
            <div class="card-body">
              <div class="col-md-12">
                <form>
                  <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" class="form-control " id="usuario" aria-describedby="emailHelp" placeholder="Usuario">
                  </div>
                  <div class="form-group">
                    <label for="pass">Contraseña</label>
                    <input type="password" class="form-control" id="pass" placeholder="Contraseña">
                  </div>

                  <a class="btn btn-primary" id="ingresar">Ingresar</a>
                  <a id="registrar" class="btn" data-toggle="collapse" data-target="#box-login" >Registrate</a>

                </form>
              </div>
            </div>
          </div>
        </div>
    </div>


  </body>
</html>
