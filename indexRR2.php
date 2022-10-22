<?php
  include("conectar.php");
//$con = new mysqli("localhost","rrivas","12345","ingreso"); // Conectar a la BD
$sql = "select num, date_format(recorded,'%d/%m/%y - %T') as fecha, message from datos ORDER BY NUM DESC LIMIT 10"; // Consulta SQL
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
    <title>Grafica de Barra y Lineas con PHP y MySQL</title>
    <script src="chart.min.js"></script>
</head>
<body>
<h1>Grafica de Barra y Lineas con PHP y MySQL</h1>
<canvas id="chart1" style="width:300px" height="85px"></canvas>
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
<H1 style="margin:0 auto;">Registro de captura de datos </H1>
<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1 style="margin:0 auto;" >
<TR><TD align="center" > <B>REGISTRO</B></TD><TD align="center"><B>FECHA</B></TD><TD align="center" ><B>GRADOS</B></TD></Tr>
<?php foreach($data as $d):?>
        <?php echo"<tr><td>{$d->num}</td><td> {$d->fecha}</td><td> {$d->message}</td>"; ?> 
        <?php endforeach; ?>
</body>
</html>
