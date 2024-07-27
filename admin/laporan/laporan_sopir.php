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
	$pdf ->Cell(0,10,'Laporan Rekapitulasi Sopir',0,0,'C');
	$pdf ->Ln(25);
	$pdf ->SetX(120);
	$pdf ->SetFont('Times','B',10);
	$pdf ->SetLineWidth(1,5);
	$pdf ->SetFillColor(252,255,189);
	$pdf ->Cell(40,15,"ID",1,"LR","C", true);
	$pdf ->Cell(120,15,"Nama",1,"LR","C", true);
	$pdf ->Cell(120,15,"Jenis Kelamin",1,"LR","C", true);
	$pdf ->Cell(80,15,"Umur",1,"LR","C", true);
	$pdf ->Cell(100,15,"Telepon",1,"LR","C", true);
	$pdf ->Cell(150,15,"Alamat",1,"LR","C", true);
	$pdf ->Cell(80,15,"Tarif",1,"LR","C", true);
	$pdf ->Ln();
	$tampil=$koneksi->query("SELECT * FROM tbsopir ORDER BY kd_sopir ASC");
	$nilaiY = $pdf->GetY();
	while ($row = $tampil->fetch_object()){
		;
	$pdf ->SetX(120);
	$pdf ->Cell(40,40,$row->kd_sopir,1,"LR","C");
	$pdf ->Cell(120,40,$row->nama_sopir ,1,"LR","C");
	$pdf ->Cell(120,40,$row->kelamin_sopir,1,"LR","C");
	$pdf ->Cell(80,40,$row->umur_sopir,1,"LR","C");
	$pdf ->Cell(100,40,$row->tlp_sopir,1,"LR","C");
	$pdf ->Cell(150,40,$row->alamat_sopir,1,"LR","C");
	$pdf ->Cell(80,40,$row->tarif_sopir,1,"LR","C");
	$pdf ->Ln();
	$nilaiY = $pdf->GetY();
	}

	$pdf ->Output('Rekap-Sopir-'.date('dFY').'.pdf','I');
	
?>