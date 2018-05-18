<?php
require ('../conexion.php');
  switch ($_POST["action"]) {
    case 'ver':
      $tam="";
      $cad="";
      $arreglo=array();
      $arr=array();
      $ind=0;
      // $file = fopen("/home/juandeb/Documentos/logs", "r");
      // while(!feof($file)) {
      //   $tam.=fgets($file);
      // }
        $lineas = file('/home/juandeb/Documentos/logs');
          // Recorrer nuestro array, mostrar el código fuente HTML como tal y mostrar tambíen los números de línea.
          foreach ($lineas as $num_linea => $linea) {
               $arreglo[$num_linea]=$lineas{$num_linea};
          }

          for ($i=0; $i <sizeof($arreglo) ; $i++) {
            // echo " Iteracion: ".$i." ";
            $cad=$arreglo[$i];
            for ($j=0; $j <= strlen($arreglo[$i]) ; $j++) {
                $tam.=$cad{$j};
                if ($cad{$j}=="" || $cad{$j}==" ") {
                  $arr[$ind]=$tam;
                  $ind++;
                  $tam="";
                }
            }
          }
          // print_r(json_encode(strlen($arreglo[0])." ".strlen($arreglo[1])));
          print_r(json_encode($arr));
          // echo strlen($tam);
          // echo $cad;
     fclose($file);
      break;

      // for ($j=0; $j <strlen($arreglo[$i]) ; $j++) {
      //   echo $j;
      //   if ($tam{$j}!=" " && $tam{$j}!="") {
      //     $cad.=$tam{$j};
      //   }
      //   else {
      //     $arr[$ind]=$cad;
      //     $cad="";
      //     $ind++;
      //   }
      // }
    default:
      # code...
      break;
  }
  $conexion->close();

?>
