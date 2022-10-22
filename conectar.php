<?php
$con = new mysqli("localhost","rrivas","12345","ingreso"); // Conectar a la BD
//agregue
if(mysqli_connect_errno()){
    echo 'Conexion Fallida : ', mysqli_connect_error();
    exit();
}
?>