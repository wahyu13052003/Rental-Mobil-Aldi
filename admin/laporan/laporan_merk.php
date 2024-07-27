<?PHP
	date_default_timezone_set("Asia/Jakarta");
	require('inc/fpdf/fpdf.php');
	require('../koneksi.php');

	$pdf = new FPDF('L', 'pt', 'A4');
	$pdf -> SetTitle('Laporan rekapitulasi barang');
	$pdf -> AliasNbPages();
	$pdf -> SetTopMargin(30);
	$pdf -> SetLeftMargin(20);
	$pdf -> SetRightMargin(20);
	$pdf -> SetAutoPageBreak(true, 50);

	$pdf ->AddPage();
	$pdf ->Image('inc/fpdf/logo.png', 32,23,50);
	$pdf ->SetFont('Times','B',16);
	$pdf ->Cell(70);
	$pdf ->Cell(500,10,'Rental Mobil',0,0,'L');
	$pdf ->Ln(14);
	$pdf ->Cell(70);
	$pdf ->SetFont('Times','I',9);
	$pdf ->Cell(500,10,'Jalan Babakan Sirna',0,0,'L');
	$pdf ->SetLineWidth(1);
	$pdf ->Line(20,77,820,77);
	$pdf ->SetLineWidth(1,5);
	$pdf ->Line(20,79,820,79);
	$pdf ->SetLineWidth(1,5);
	$pdf ->Line(20,79,820,79);
	$pdf ->SetY(110);
	$pdf ->SetFont('Times', 'BUI',16);
	$pdf ->Cell(0,10,'Laporan Rekapitulasi Costumer',0,0,'C');
	$pdf ->Ln(25);
	$pdf ->SetX(120);
	$pdf ->SetFont('Times','B',10);
	$pdf ->SetLineWidth(1,5);
	$pdf ->SetFillColor(252,255,189);
	$pdf ->Cell(40,15,"ID",1,"LR","C", true);
	$pdf ->Cell(120,15,"Merk Mobil",1,"LR","C", true);
	$pdf ->Cell(120,15,"Jenis Mobil",1,"LR","C", true);
	$pdf ->Ln();
	$tampil=$koneksi->query("SELECT * FROM tbmerk ORDER BY kd_merk ASC");
	$nilaiY = $pdf->GetY();
	while ($row = $tampil->fetch_object()){
		;
	$pdf ->SetX(120);
	$pdf ->Cell(40,40,$row->kd_merk,1,"LR","C");
	$pdf ->Cell(120,40,$row->merk_mobil ,1,"LR","C");
	$pdf ->Cell(120,40,$row->jenis_mobil,1,"LR","C");
	$pdf ->Ln();
	$nilaiY = $pdf->GetY();
	}

	$pdf ->Output('Rekap-Costumer-'.date('dFY').'.pdf','I');
	
?>