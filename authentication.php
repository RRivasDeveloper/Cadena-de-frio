
<?php
    include("conectar.php");   
	$username = $_POST['user'];
    	$password = $_POST['pass'];
	echo "<h1><center> {$password} {$username} </center></h1>";
        //to prevent from mysqli injection
        $username = stripcslashes($username);
        $password = stripcslashes($password);
        $username = mysqli_real_escape_string($con, $username);
        $password = mysqli_real_escape_string($con, $password);
	//CONSULTA LA CONTRASEÑA ENCRIPTADA CON MD5
        $sql = "select * from usuarios_login where usuario = '$username' and contrasena =MD5('$password')";
        $result = $con->query($sql);
	$data = array(); // Array donde vamos a guardar los datos
	$count=0;
	while($r = $result->fetch_object()){ // Recorrer los resultados de Ejecutar la consulta SQL
    	$data[]=$r; // Guardar los resultados en la variable $data
	$count+=1;
	}
        if($count == 1){
            echo "<h1><center> Acceso Correcto</center></h1>";
            header("Location: /pg2/frio/inicio.php");
	    exit();
	}
        else{
            echo "<h1> Error de acceso. Usuario o Contraseña incorrecto.</h1>";
            echo " <a href=\"/pg2/frio/\">Volver a Intertarlo</a>";
        }
?>
