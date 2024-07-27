<?PHP

	if(isset($_GET['no_polisi']))
		$no_polisi=$_GET['no_polisi'];
	if(isset($_POST['idlanjut'])){
		$kd_detail=$_POST['kd_detail'];
		$kd_sewa=$_POST['kd_sewa'];
		$kd_sopir=$_POST['kd_sopir'];
		$total_harga=$_POST['total_harga'];
		$querydetail="INSERT INTO tbdetailsewa(kd_detail,kd_sewa,kd_sopir,total_harga) value ('$kd_detail','$kd_sewa','$kd_sopir','$total_harga')";
		$masukdetail=$koneksi->query($querydetail);
		if($masukdetail){
			//$qUpdate="UPDATE tb_barang JOIN tb_detail_pasok ON tb_barang.kode_barang=tb_detail_pasok.kode_barang SET stok_barang=(stok_barang + ".$qty.") WHERE kode_pasok=".$kode_pasok." ";
			//$update=$koneksi->query($qUpdate);
			echo "<script>alert('Barang Berhasil Ditambahkan');window.location='detail_pasok.php?no_polisi=".$no_polisi."'</script>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="html 5 template">
	<meta name="author" content="tonytemplates.com">
	<link rel="icon" href="favicon.ico">
	<title>Rental Mobil</title>
	<!-- Bootstrap core CSS -->
	<link href="assets/css/plugins/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/plugins/jquery.smartmenus.bootstrap.css" rel="stylesheet">
	<link href="assets/css/plugins/lightslider.min.css" rel="stylesheet" >
	<link href="assets/css/plugins/intlTelInput.css" rel="stylesheet" >
	<link href="assets/css/main-style.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- Icon Font-->
	<link href="iconfont/style.css" rel="stylesheet">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
</head>

<body class="page__details">
<!-- Loader -->
<div class="plash">
	<div id="scene">
		<span></span>
		<div id="road">
			<div id="stripes"></div>
		</div>
	</div>
	<div class="loading">Loading<span>...</span></div>
</div>

	<main id="page-content">
		<div style="text-align: center;">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="breadcrumbs__title">Fleet</div>
						<div class="breadcrumbs__items">
							<div class="breadcrumbs__wrap">
								<div class="breadcrumbs__item">
									<a href="#" class="breadcrumbs__item-link">Home</a> <span>/</span> <a href="#" class="breadcrumbs__item-link">Fleet</a> <span>/</span> <a href="#" class="breadcrumbs__item-link">Hyundai i30</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- // Breadcrumbs  -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
				<?php
					$tampil=$koneksi->query("SELECT * FROM tbdetailsewa INNER JOIN tbsewa ON tbdetailsewa.kd_sewa=tbsewa.kd_sewa INNER JOIN tbsopir ON tbdetailsewa.kd_sopir=tbsopir.kd_sopir INNER JOIN tbmobil ON tbsewa.no_polisi=tbmobil.no_polisi INNER JOIN tbmerk ON tbmobil.kd_merk=tbmerk.kd_merk ");
				    $jumlah_data=$tampil->num_rows;
				    if($jumlah_data>0){
				      while($data=$tampil->fetch_object()){
				?>
					<div class="model-details-box">
						<div class="model-details-box__inner">
							<div class="model-details-box__info">
								<h3 name="kd_sewa"><?php echo $data->merk_mobil?> <?php echo $data->jenis_mobil?></h3>
								<h6>FITUR KENDARAAN</h6>
								<table class="details-car">
									<tr>
										<th>Hyundai i30</th>
										<th></th>
									</tr>
									<tr>
										<td>Jumlah Penumpang</td>
										<td>4</td>
									</tr>
									<tr>
										<td>Kapasitas Bagasi</td>
										<td>3</td>
									</tr>
									<tr>
										<td>Pintu</td>
										<td>5</td>
									</tr>
									<tr>
										<td>Transmisi</td>
										<td>Standard</td>
									</tr>
									<tr>
										<td>Stereo</td>
										<td>AM/FM w/ CD player</td>
									</tr>
									<tr>
										<td>Air Conditioning</td>
										<td>Ya</td>
									</tr>
								</table>
							</div>
							<div class="model-slider-wrapper">
								<ul id="lightSlider" class="model-slider">
									<li data-thumb="assets/images/model-thumb-1.jpg">
										<img src="assets/images/model-slide-1.jpg" alt="" />
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- // order-details-form  -->
					<form action="#" class="order-details-form" name="contactform" method="post" novalidate>
						<div class="inner-form">
						<h3>FORM PEMESANAN</h3>
							<div class="inner-form__elements">
								<div class="inner-half">
									<h5>Pesanan Baru</h5>	
									<br>								
									<div class="inner-half__width">
										<div >
											<h6>Tanggal Sewa</h6>
											<input type="date" name="tgl_sewa" required="">

										</div>
										<div >
											<h6>Tanggal Kembali</h6>
											<input type="date" name="tgl_kembali" required="">
										</div>
									</div>
									<div >
											<input type="text" name="total_sewa" placeholder="Total Sewa" style="text-align: center;" readonly="">
										</div>
								</div>
								<div class="inner-half">
									<h5>Data Pemesan</h5>
										<div >
											<input type="text" name="first-name" placeholder="ID Costumer" readonly="">
										</div>
										<div >
											<input type="text" name="last-name" placeholder="Nama Costumer" readonly="">
										</div>
									<h5>Data Mobil</h5>
										<div >
											<input type="text" name="no_polisi" placeholder="No Polisi" readonly="">
										</div>
										<div>
											<input type="text" name="nama_mobil" placeholder="Nama Mobil" readonly="">
										</div>
										<div >
											<input type="text" name="tarif_mobil" placeholder="Tarif Mobil" readonly="">
										</div>
								</div>
							</div>
							<a href="index.php?page=detailsewa"><button type="button" class="btn" name="idlanjut">CONTINUE</button> </a>
						</div>
					</form>
					<?php 
					}
					}
					?>
				</div>
			</div>
		</div>
	</main>
	<!-- // Content  -->
	<script src="assets/js/jquery.1.12.4.min.js"></script>
	<script src="assets/js/plugins/bootstrap.min.js"></script>
	<script src="assets/js/plugins/jquery.smartmenus.min.js"></script>
	<script src="assets/js/plugins/jquery.smartmenus.bootstrap.js"></script>
	<script src="assets/js/plugins/stickup.min.js"></script>
	<script src="assets/js/plugins/lightslider.min.js"></script>
	<script src="assets/js/plugins/intlTelInput.min.js"></script>
	<script src="assets/js/plugins/tool.js"></script>
	<script src="assets/js/custom.js"></script>

</body>

</html>