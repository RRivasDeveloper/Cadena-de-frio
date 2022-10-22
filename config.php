<?php
//conexion 2 a mysqle Xamp
$pdo = new PDO('mysql:host=192.168.101.80;port=3306;dbname=ingreso',
'rrivas', '12345');
// See the "errors" folder for details...
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
