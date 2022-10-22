<?php
	require 'fpdf/fpdf.php';
	header('Content-Type: text/html; charset=ISO-8859-1');//tildes

	class PDF extends FPDF
	{
		function Header()
		{
			
            $this->Image('images/logo.jpg', 5, 10, 40 );
			$this->SetFont('Arial','B',20);
            $this->SetTextColor(18,4,80);
			$this->Cell(40);
			$this->Cell(120,10, utf8_decode('Reporte De Medición de temperatura'),0,0,'L');
            // utf8_decode(), para visualizar correctamente caracteres especiales
			$this->Ln(30);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
            $this->SetTextColor(18,4,80);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>