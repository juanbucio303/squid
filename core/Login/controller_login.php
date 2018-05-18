<?php

require_once("../conexion.php");
switch ($_POST["action"]) {
  case 'ingresar':
  // echo 'hola';
      $username=$_POST['nombre_user'];
      $pass=$_POST['pass'];
      // echo $username;
      $sql="select * from usuarios where nombre_usuario='".$username."' and contra=".$pass.";";
      $result=$conexion->query($sql)or trigger_error($conexion->error."[$sql]");
      if($result->num_rows>0){
        $datos=$result->fetch_assoc();
        session_start();
        $_SESSION['user']=$datos["id_usuario"];
        $_SESSION["name"]=$datos["nombre_usuario"];
        $_SESSION["tipo"]=$datos["id_tipo_usuario"];
        if ($datos["id_tipo_usuario"]==1) {
          ?>
          <script>
          window.location.href='admin.php';
          </script>

          <?php
        }else {
          ?>
          <script>
          window.location.href='usuarios.php';
          </script>

          <?php
        }
      }else {
        echo " contraseña o usuario incorrecto";
      }
    break;
  case 'cerrar_sesion':
    session_start();
    session_destroy();
    ?>
      <script type="text/javascript">
          window.location.href="index.php";
      </script>
    <?php
    break;
  default:
    # code...
    break;
}
$conexion->close();
?>
