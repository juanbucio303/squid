<?php
switch ($_POST["action"]) {
  case 'push':
  $comand=$_POST["com"];
  $file = fopen("/home/juandeb/Documentos/prueba-soto.txt", "a");
  fwrite($file, "host equipo2{
                  hardware ethernet 00:0c:29:b4:c8:2a;
                  fixed-address 10.5.5.15;
                  option domain-name-servers 10.5.5.1;
                }" . PHP_EOL);
  //fwrite($file, "Añadimos línea 2" . PHP_EOL);
   $file = fopen("/home/juandeb/Documentos/prueba-soto.txt", "r");
   while(!feof($file)) {
     echo fgets($file). "<br />";
     }
  fclose($file);
    //echo $salida;
    break;

}
?>
