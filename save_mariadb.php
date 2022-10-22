<?php
//Post ingreso de datos a mysql Xamp
include("config.php");
$temperatura=$_GET["temp"];//variable recibida por arduino
$stmtI=$pdo->query("INSERT INTO ingreso.datos (message,CONTENEDOR) VALUES(".$temperatura.",1)");
$pdo=null;
?>
