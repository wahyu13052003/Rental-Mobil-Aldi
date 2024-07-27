<?php 
date_default_timezone_set("Asia/Jakarta");
require('inc/fpdf/fpdf.php');
require('../koneksi.php'); 

$tb_act     = isset($_POST['tb_act']) ? $_POST['tb_act'] : NULL; 
$p_bulan    = isset($_POST['bulan']) ? $_POST['bulan'] : NULL;
$p_tahun    = isset($_POST['tahun']) ? $_POST['tahun'] : NULL;
//contruct pdf
$pdf = new FPDF('L','pt','A4');
$pdf -> SetTitle('Laporan Rekapitulasi Pemesanan');
$pdf -> AliasNbPages();
$pdf -> SetTopMargin(30);
$pdf -> SetLeftMargin(20);
$pdf -> SetRightMargin(20);
$pdf -> SetAutoPageBreak(true, 50);

$pdf -> AddPage();
$pdf -> Image('inc/fpdf/logo.png',30,25,50);
$pdf -> SetFont('Times','B',16);
$pdf -> Cell(70);
$pdf -> Cell(500,10,'RENTAL',0,0,'L');

$pdf -> Ln(14);
$pdf -> SetFont('Times','',14);
$pdf -> Cell(70);
$pdf -> Cell(500,10,'Rental Mobil',0,0,'L');
$pdf -> Ln(14);
$pdf -> Cell(70);
$pdf -> SetFont('Times','I',9);
$pdf -> Cell(500,10,'Jalan Babakan Sirna',0,0,'L');
$pdf -> SetLineWidth(1);
$pdf -> Line(20,77,820,77);
$pdf -> SetLineWidth(1,5);
$pdf -> Line(20,79,820,79);

$pdf -> SetY(110);
$pdf -> SetFont('Times','BUI',16);
$pdf -> Cell(0,10,'Laporan Rekapitulasi Data Pemesanan bulan '.$p_bulan.' Tahun '.$p_tahun,0,0,'C');
$pdf -> Ln(25);

$pdf -> SetX(20);
$pdf -> SetFont('Times','B',10);
$pdf -> SetLineWidth(1,5);
$pdf -> SetFillColor(255,255,189);
//$pdf -> Cell(90,15,"Gambar",1,"LR","C",true);
$pdf -> Cell(40,15,"ID",1,"LR","C",true);
$pdf -> Cell(90,15,"Tanggal Sewa",1,"LR","C",true);
//$pdf -> Cell(120,15,"Jenis",1,"LR","C",true);
$pdf -> Cell(90,15,"Tanggal Kembali",1,"LR","C",true);
$pdf -> Cell(70,15,"No Polisi",1,"LR","C",true);
$pdf -> Cell(80,15,"Mobil",1,"LR","C",true);
$pdf -> Cell(80,15,"Nama Sopir",1,"LR","C",true);
$pdf -> Cell(80,15,"Total Sewa",1,"LR","C",true);
$pdf -> Cell(110,15,"Keterangan",1,"LR","C",true);
$pdf -> Cell(40,15,"ID CS",1,"LR","C",true);
$pdf -> Cell(80,15,"Nama CS",1,"LR","C",true);

$pdf -> Ln();
//query parameter bulan dan tahun
$tampil=$koneksi->query("SELECT * FROM tbdetailsewa LEFT JOIN tbcostumer ON tbdetailsewa.kd_cs=tbcostumer.kd_cs LEFT JOIN tbsewa ON tbdetailsewa.kd_sewa=tbsewa.kd_sewa LEFT JOIN tbmobil ON tbsewa.no_polisi=tbmobil.no_polisi LEFT JOIN tbmerk ON tbmobil.kd_merk=tbmerk.kd_merk LEFT JOIN tbsopir ON tbdetailsewa.kd_sopir=tbsopir.kd_sopir WHERE month(tgl_sewa) = '$p_bulan' AND year(tgl_sewa) = '$p_tahun' ");
$no = 0;
$nilaiY = $pdf->GetY();
while ($row = $tampil->fetch_object()){
	$harga = $row->total_sewa;
	$rupiah = number_format($harga,2,',','.');
	$tanggalsewa = tgl_indo($row->tgl_sewa);
	$tanggalkembali = tgl_indo($row->tgl_kembali);
	$harisewa = date('l', strtotime($tanggalsewa));
	$harikembali = date('l', strtotime($tanggalkembali));
	$hari_indo = array('Monday' => 'Senin',
		'Tuesday' => 'Selasa',
		'Wednesday' => 'Rabu',
		'Thursday' => 'Kamis',
		'Friday' => 'Jum`at',
		'Saturday' => 'Sabtu',
		'Sunday' => 'Minggu');

$pdf -> SetX(20);
//$pdf -> Image('../barang/'.$row->gambar,158,$nilaiY,35);
//$pdf -> Cell(90,40,'',1,"LR","C");
$pdf -> Cell(40,40,$row->kd_detail,1,"LR","C");
//$pdf -> Cell(120,40,$row->jenis_barang,1,"LR","C");
$pdf -> Cell(90,40,$hari_indo[$harisewa]." ".$tanggalsewa,1,"LR","C");
$pdf -> Cell(90,40,$hari_indo[$harikembali]." ".$tanggalkembali,1,"LR","C");
$pdf -> Cell(70,40,$row->no_polisi,1,"LR","C");
$pdf -> Cell(80,40,"$row->merk_mobil $row->jenis_mobil",1,"LR","C");
$pdf -> Cell(80,40,$row->nama_sopir,1,"LR","C");
$pdf -> Cell(80,40,"Rp. ".$rupiah,1,"LR","C");
$pdf -> Cell(110,40,$row->ket,1,"LR","C");
$pdf -> Cell(40,40,$row->kd_cs,1,"LR","C");
$pdf -> Cell(80,40,$row->nama_cs,1,"LR","C");
$pdf -> Ln();
$nilaiY = $pdf -> GetY();
}
$pdf -> Output('Rekap_Pemesanan-'.date('dFY').'.pdf','I');

function tgl_indo($tgl){
$tanggal = substr($tgl, 8,2);
$bulan = substr($tgl, 5,2);
$tahun = substr($tgl, 0,4);
return $tanggal.'-'.$bulan.'-'.$tahun;	
}
 ?>
