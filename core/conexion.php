<?php
$conexion=new mysqli("localhost","phpmyadmin","123456","squid");
if ($conexion->connect_errno) {
  printf("Fallo conexion %s\n",$conexion->mysqli_error);
  exit();
}

?>
