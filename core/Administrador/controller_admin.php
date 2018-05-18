<?php
require('../conexion.php');
switch ($_POST['action']) {
  case 'getAll':

  $sql="SELECT usuarios.nombre_usuario,personales.nombre,personales.ap,personales.am,dispositivos.desc_dispositivo,dispositivos.ip_address,dispositivos.mac_address,tipo_dispositivo.desc_disp FROM dispositivos,tipo_dispositivo,personales,usuarios WHERE dispositivos.id_tipo_dispositivo=tipo_dispositivo.id_tipo_dispositivo AND usuarios.id_dispositivo=dispositivos.id_dispositivo AND personales.id_usuario=usuarios.id_usuario;";
  $result=$conexion->query($sql)or trigger_error($conexion->error."[$sql]");
  $datos=array();
  while ($row=$result->fetch_array()){
    $datos[]=$row;
  }
  print_r(json_encode($datos));
    break;

  default:
    # code...
    break;
}
$conexion->close();
 ?>
