<?php
include '../koneksi.php';
$tampil=$koneksi->query("SELECT * FROM tbmobil WHERE no_polisi='$_GET[id]'");
$jumlah_data=$tampil->num_rows;
if($jumlah_data>0){
	while($row=$tampil->fetch_object()){
		if(file_exists("../img/gambar/$row->foto_mobil")){
	unlink("../img/gambar/$row->foto_mobil");
	}	
}
}
	$hapusdata=$koneksi->query("DELETE FROM tbmobil where no_polisi='$_GET[id]'");
	if ($hapusdata){
		echo "<script>
			alert ('Data Berhasil dihapus !');
			window.location.href='../index.php?page=mobil';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil dihapus !');
		window.location.href='../index.php?page=mobil';</script>";
	} 
?>
