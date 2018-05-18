<?php
require_once("../conexion.php");
switch ($_POST["action"]) {
  case 'registrar':
      // $nombre=$_POST["nombre"];
      // $ap=$_POST["ap"];
      // $am=$_POST["am"];
      // $correo=$_POST["correo"];
      // $no_cuenta=$_POST["no_cuenta"];
      // $nombre_user=$_POST["nom_usuario"];
      // $pass=$_POST["contra"];
      // $fecha_ini=$_POST["fecha"];
      // $tipo_disp=$_POST["tipo_disp"];
      // $mac=$_POST["mac"];
      // $ip=$_POST["ip"];
      // $sql="CALL registro('".$nombre."','".$ap."','".$am."','".$no_cuenta."','".$correo."','".$nom_usuario."','".$pass."','".$tipo_disp."','".$mac."','".$ip."');";
      // $result=$conexion->query($sql)or trigger_error($conexion->error."[$sql]");
      echo "hola";//$nombre." ".$ap." ".$am." ".$correo." ".$no_cuenta." ".$nombre_user." ".$pass." ".$tipo_disp." ".$mac." ".$ip;
    break;
  case 'insert_datos':

      $id=$_POST['id'];
      $sql="INSERT INTO personales VALUES(null,'".$no_cuenta."','".$nombre."','".$ap."','".$am."','".$correo."',".$id");";
      $result=$conexion->query($sql)or trigger_error($conexion->error."[$sql]");
    break;
  default:
    # code...
    break;
}
$conexion->close();
?>
