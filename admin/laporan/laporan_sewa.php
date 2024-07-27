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
	$pdf ->Cell(0,10,'Laporan Rekapitulasi Sewa',0,0,'C');
	$pdf ->Ln(25);
	$pdf ->SetX(120);
	$pdf ->SetFont('Times','B',10);
	$pdf ->SetLineWidth(1,5);
	$pdf ->SetFillColor(252,255,189);
	$pdf ->Cell(80,15,"No Polisi",1,"LR","C", true);
	$pdf ->Cell(100,15,"Mobil",1,"LR","C", true);
	$pdf ->Cell(80,15,"Tarif Mobil",1,"LR","C", true);
	$pdf ->Cell(80,15,"Tanggal Sewa",1,"LR","C", true);
	$pdf ->Cell(80,15,"Tanggal Kembali",1,"LR","C", true);
	$pdf ->Cell(80,15,"Total Sewa",1,"LR","C", true);
	$pdf ->Ln();
	$tampil=$koneksi->query("SELECT * FROM tbsewa LEFT JOIN tbmobil ON tbsewa.no_polisi=tbmobil.no_polisi LEFT JOIN tbmerk ON tbmobil.kd_merk=tbmerk.kd_merk ORDER BY kd_sewa ASC");
	$nilaiY = $pdf->GetY();
	while ($row = $tampil->fetch_object()){
		;
	$pdf ->SetX(120);
	$pdf ->Cell(80,40,$row->no_polisi,1,"LR","C");
	$pdf ->Cell(100,40,"$row->merk_mobil $row->jenis_mobil",1,"LR","C");
	$pdf ->Cell(80,40,$row->tarif_mobil,1,"LR","C");
	$pdf ->Cell(80,40,$row->tgl_sewa,1,"LR","C");
	$pdf ->Cell(80,40,$row->tgl_kembali,1,"LR","C");
	$pdf ->Cell(80,40,$row->total_sewa,1,"LR","C");
	$pdf ->Ln();
	$nilaiY = $pdf->GetY();
	}

	$pdf ->Output('Rekap-Sewa-'.date('dFY').'.pdf','I');
	
?>