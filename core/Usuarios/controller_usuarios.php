<?php
require ('../conexion.php');
  switch ($_POST["action"]) {
    case 'guardar':
      $mac=$_POST["mac"];
      $ip=$_POST["ip"];
      $usr=$_POST["usr"];
      $file = fopen("/home/juandeb/Documentos/prueba-soto.txt", "a");
      fwrite($file, "host ".$usr."{
      hardware ethernet ".$mac.";
      fixed-address ".$ip.";
      option domain-name-servers 10.5.5.1;
    }");
      fclose($file);
      break;
    case 'ver':
      $file = fopen("/home/juandeb/Documentos/prueba-soto.txt", "r");
      while(!feof($file)) {
        echo fgets($file). "<br />";
        }
     fclose($file);
      break;
    case 'posicion':
        $arreglo=array();
        $lineas = file('/home/juandeb/Documentos/prueba-soto.txt');

          // Recorrer nuestro array, mostrar el código fuente HTML como tal y mostrar tambíen los números de línea.
          foreach ($lineas as $num_linea => $linea) {
               $arreglo[$num_linea]=$lineas{$num_linea};
          }
          print_r(json_encode($arreglo));

        break;
        case 'editar':
        $arreglo=array();
        $arreglo=$_POST["datos"];
        $ind=$_POST["ind"];
        $user_edit="soto";
        $mac_edit="00:00:00:00:00:01";
        $ip_edit="10.8.0.9";
        $dominio="10.5.5.1";
        for ($i=0; $i <=4 ; $i++) {
          switch ($i) {
            case '0':
               $arreglo[$ind+$i]="host ".$user_edit."{". PHP_EOL;
              break;
            case '1':
              $arreglo[$ind+$i]="      hardware ethernet ".$mac_edit.";". PHP_EOL;
              break;
            case '2':
              $arreglo[$ind+$i]="      fixed-address ".$ip_edit.";". PHP_EOL;
              break;
            case '3':
              $arreglo[$ind+$i]="      option domain-name-servers ".$dominio.";". PHP_EOL;
              break;
            case '4':
              $arreglo[$ind+$i]="}";
              break;
            default:
              # code...
              break;
          }
        }
        $cad="";
        $len=sizeof($arreglo);
        for ($i=0; $i <$len ; $i++) {
          //print_r($arreglo[$i]);
           $cad.=$arreglo[$i];
        }
        $file = fopen("/home/juandeb/Documentos/prueba-soto.txt", "w");
        fwrite($file, $cad);
        fclose($file);
        print_r($cad);
          break;
      case 'stop':
          $resp=shell_exec("sudo /usr/sbin/stop.sh");
          echo $resp;
        break;
    case 'getDatos':
          session_start();
          $username=$_SESSION['name'];
          $sql="SELECT usuarios.nombre_usuario,personales.nombre,personales.ap,personales.am,dispositivos.desc_dispositivo,dispositivos.ip_address,dispositivos.mac_address,tipo_dispositivo.desc_disp FROM dispositivos,tipo_dispositivo,personales,usuarios WHERE dispositivos.id_tipo_dispositivo=tipo_dispositivo.id_tipo_dispositivo AND usuarios.id_dispositivo=dispositivos.id_dispositivo AND personales.id_usuario=usuarios.id_usuario AND usuarios.nombre_usuario='".$username."';";
          $result=$conexion->query($sql)or trigger_error($conexion->error."[$sql]");
          $datos=$result->fetch_assoc();
          // //echo $datos['id_tipo_usuario'];
          print_r(json_encode($datos));
      break;
    default:
      # code...
      break;
  }
  $conexion->close();

?>
