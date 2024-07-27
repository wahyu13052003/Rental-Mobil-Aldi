<?php
include '../koneksi.php';

	$hapusdata=$koneksi->query("DELETE FROM tbmerk where kd_merk='$_GET[id]'");

	if ($hapusdata){
		echo "<script>
			alert ('Data Berhasil dihapus !');
			window.location.href='../index.php?page=merk';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil dihapus !');
		window.location.href='../index.php?page=merk';</script>";
	} 

?>