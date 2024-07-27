<?php
include '../koneksi.php';

	$hapusdata=$koneksi->query("DELETE FROM tbsopir where kd_sopir='$_GET[id]'");

	if ($hapusdata){
		echo "<script>
			alert ('Data Berhasil dihapus !');
			window.location.href='../index.php?page=sopir';</script>";

	}else{
		echo"<script>alert('Data Tidak Berhasil dihapus !');
		window.location.href='../index.php?page=sopir';</script>";
	} 

?>