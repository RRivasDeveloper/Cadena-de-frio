<?php
header ('Content-type: text/html; charset=utf-8');//tildes
$message = "";
if(isset($_POST['enviar'])){ //check if form was submitted
  $value1= $_POST['user']; //get input text
$value2= $_POST['pass']; //get input text
  $message = "Success! You entered: ".$input;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="chart.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body style=" background-color:#eee;">
<div class="h-100 gradient-form" style="background-color: #eee; position:absolute; margin-left:10%;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center" >
                  <img src="relojTemp.jpg"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Universidad Mariano Gálvez</h4>
                </div>

                <form name="f1" action = "authentication.php" id="f1 " method = "POST" >
                  <p>Ingrese sus credenciales de acceso</p>

                  <div class="form-outline mb-4">
                    <input type="text" id="user" name="user" class="form-control"
                      placeholder="usuario@123" />
                    <label class="form-label" for="form2Example11">Usuario</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="pass" name="pass" class="form-control" />
                    <label class="form-label" for="form2Example22">Contraseña</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <input class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" id = "btn"  name="submit" value="Ingreso" />
                  </div>
                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2" style=" background-color:#0c5778;">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Sistema de Monitoreo Cadena de Frío</h4>
                <p  class="small mb-0"><FONT SIZE=5> Sistema dedicado al monitoreo de la cadena de frío en los contenedores de almacenamiento.
 Empresa procesadora de mariscos ubicada en el municipio de Palín, Escuintla</font> </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--
Validar campos en blanco
-->
<script>  
function validation()  
{  
    var id=document.f1.user.value;  
    var ps=document.f1.pass.value;  
    if(id.length=="" && ps.length=="") {  
        alert("Nombre de usuario y password no pueden estar en blanco...");  
        return false;  
    }  
    else  
    {  
        if(id.length=="") {  
            alert("User Name is empty");  
            return false;  
        }   
        if (ps.length=="") {  
        alert("Password field is empty");  
        return false;  
        }  
    }                             
}  
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>
