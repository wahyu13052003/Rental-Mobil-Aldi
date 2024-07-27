<?php 
include('koneksi.php');
session_start();
$act = $_GET['act'];
$user= $_POST['username'];
$pass= md5 ($_POST['password']);
if(isset($_GET['act'])){
	if($act == 1){
		$login=$koneksi->query("SELECT * FROM tbadmin WHERE username = '$user' AND password = '$pass'");
		$data=$login->num_rows;
		if ($data > 0) {
			while($row = $login->fetch_object()){
			$_SESSION['kd_admin'] 			= $row->kd_admin;
		 	$_SESSION['nama_admin'] 		= $row->nama_admin;
		 	$_SESSION['username'] 			= $row->username;
		 	$_SESSION['password'] 			= $row->password;
		 	$_SESSION['level']				= $row->level;
			echo"<script>alert ('Selamat datang ".$user."');
	                   window.location='index.php?page=home'</script>";
			}
	}else{
		echo"<script>alert ('Anda Gagal Login');
	window.location='login.php'</script>";
	}
}
}

?>
