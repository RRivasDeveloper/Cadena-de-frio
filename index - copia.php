<?php
//PAGINA DE INICIO
include("conectar.php");
//$con = new mysqli("192.168.101.13","rrivas","12345","ingreso"); // Conectar a la BD
$sql = "select num, date_format(recorded,'%d/%m/%y -> %T') as fecha, message, contenedor from datos ORDER BY NUM DESC LIMIT 10"; // Consulta SQL
//$sql = "select num, recorded, message from datos ORDER BY NUM DESC LIMIT 10"; // Consulta SQL
$query = $con->query($sql); // Ejecutar la consulta SQL
$data = array(); // Array donde vamos a guardar los datos
while($r = $query->fetch_object()){ // Recorrer los resultados de Ejecutar la consulta SQL
    $data[]=$r; // Guardar los resultados en la variable $data
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
    <script src="chart.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-md" style="background-color: #3fa8b3;" aria-label="Fourth navbar example">
    <div class="container-fluid">
      <a style="color: #fff;" class="navbar-brand" href="#">Expand at md</a>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div  class="navbar-collapse collapse" id="navbarsExample04" style="">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a style="color: #fff;"  class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a style="color: #fff;" class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a  style="color: #fff;"class="nav-link disabled">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a  style="color: #fff;"class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
            <ul  class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div>
      <a style="color: #fff;" class="nav-link" href="#">Salir</a>
      </div>
    </div>
  </nav>


<h1  style="text-align: center;">Grafica de Camabios en Temperatura</h1>
<canvas id="chart1" width="100%" height="30%"></canvas>
<script>
var ctx = document.getElementById("chart1");
var data = {
        labels: [ 
        <?php foreach($data as $d):?>
        "<?php echo $d->fecha?>)", 
        <?php endforeach; ?>
        ],
        datasets: [{
            label: 'Temperatura',
            data: [
        <?php foreach($data as $d):?>
        <?php echo floatval($d->message);?>, 
        <?php endforeach; ?>
            ],
            backgroundColor: "#3898db",
            borderColor: "#9b59b6",
            borderWidth: 2
        }]
    };
var options = {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true,			
                	},
		scaleLabel: 	{
			display:true,
			labelString:'Fecha y Hora'
				}
			}],
	     xAxes:	[{
		scaleLabel:{
			display:true,
		        labelString:'Grados Centigrados °'
			   }	
        	}],
	}
    };
var chart1 = new Chart(ctx, {
    type: 'horizontalBar', /* valores: line,pie, bar, horizontalBar*/
    data: data,
    options: options
});
</script>
<BR>
<H1 style="margin:0 auto;  text-align: center;">Registro de captura de datos </H1>
<BR>
<HR>
<BR>
<div class="bd-example">
<table class="table" style="margin:0 auto;  text-align: center;>
  <thead class="thead-dark">
    <tr>
      <th scope="col">Registro</th>
      <th scope="col">Fecha</th>
    <th scope="col">Centigrados</th>
    <th scope="col">Contenedor</th>
	</tr>
  </thead>
  <tbody>
<?php foreach($data as $d):?>
        <?php echo"<tr><th scope=\"row\">{$d->num}</th><td> {$d->fecha }</td><td> {$d->message}</td><td> {$d->contenedor }</td>"; ?> 
        <?php endforeach; ?>

  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>
