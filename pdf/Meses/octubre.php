<?php
	//include("conectar.php");
    header ('Content-type: text/html; charset=utf-8');//tildes
    include '../plantilla.php';
    require '../../conectar.php';
	//sqlcompleto
	$sql = " select num, date_format(recorded,'%d/%m/%y - %T') as fecha, message, contenedor from datos where MONTH(recorded)='10';";
	$resultado = $con->query($sql);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(20,41,57);
    $pdf->SetTextColor(255,255,255);
	$pdf->SetFont('Arial','B',12);
    $pdf->SetXY(30,50);
	$pdf->Cell(22,6,'Registro',1,0,'C',1);
	$pdf->Cell(30,6,'Contenedor',1,0,'C',1);
	$pdf->Cell(30,6,'Temperatura',1,0,'C',1);
	$pdf->Cell(70,6,'Fecha',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
    $pdf->SetTextColor(18,4,80);
	while($row = $resultado->fetch_assoc())
	{    $pdf->SetX(30);
		$pdf->Cell(22,6,utf8_decode($row['num']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['contenedor']),1,0,'C');
		$pdf->Cell(30,6,$row['message'],1,0,'C');
		$pdf->Cell(70,6,utf8_decode($row['fecha']),1,1,'C');
	}
	$pdf->Output();
?>