<?php
include '../koneksi.php';

	$hapusdata=$koneksi->query("DELETE FROM tbcostumer where kd_cs='$_GET[id]'");

	if ($hapusdata){
		echo "<script>
			alert ('Data Berhasil dihapus !');
			window.location.href='../index.php?page=costumer';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil dihapus !');
		window.location.href='../index.php?page=costumer';</script>";
	} 

?>