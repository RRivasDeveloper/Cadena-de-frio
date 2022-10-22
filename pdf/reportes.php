<!DOCTYPE html>
<html>
<head>
    <title>Reportes</title>
    <script src="chart.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-md" style="background-color: #3fa8b3;" aria-label="Fourth navbar example">
    <div class="container-fluid">
    
      <a style="color: #fff; font-size: 40px;" class="navbar-brand" href="../inicio.php" >
      <img src="../pdf/images/logo.jpg" alt="" width="100" height="80" >Tropical Sea Food
    </a>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div  class="navbar-collapse collapse" id="navbarsExample04" style="">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a style="color: #fff;"  class="nav-link active" aria-current="page" href="#"></a>
          </li>
         
        </ul>
      </div>
      <div>
      <a style="color: #fff;" class="nav-link" href="../index.php">Salir</a>
      </div>
    </div>
  </nav>


<h1  style="text-align: center;">Reporte de cambios de temperatura por día</h1>
<H3 style="margin:0 auto;  text-align: center;">Consulta de registro por Día </H3><BR>
<form  style="margin: auto; width: 220px;" name="mes" action="dia.php" method="POST">
	
<input type="date" id="myDate" name="fecha" require >

<input type="submit"  name="enviar" value="Consultar día" class="btn btn-primary"><BR>
</form>
<H3 style="margin:0 auto;  text-align: center;">Consulta de registro por Mes </H3><BR>
<form  style="margin: auto; width: 220px;"  name="ejemplomonth" action="mes.php" method="POST">
	
    <input type="month" id="mes" name="mes"require>
    
	<input type="submit" name="enviar" value="Consultar mes"  class="btn btn-primary"><BR>
</form>
<H3 style="margin:0 auto;  text-align: center;">Consulta de registro por año </H3><BR>
<form  style="margin: auto; width: 220px;"  name="ejemplomonth" action="anio.php" method="POST">

    <input type="number" min="2022" max="2025" step="1" name="anio" id="anio" value="2022"require  >
    <br><!--EXITO-->
	<input type="submit" name="enviar" value="Consultar año"  class="btn btn-primary"><BR>
</form>

<BR>

<BR>
<HR>
<BR>
<div class="bd-example">

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>
