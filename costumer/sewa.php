<?php if (!isset($_SESSION['username_cs'])) 
  {
    echo "<script>alert('Anda Belum LOGIN Member !');window.location='index.php?hal=login'</script>";
  }


?>
				<?php
					$id=$_GET['id'];
					$result=$koneksi->query("SELECT * FROM tbmobil INNER JOIN tbmerk ON tbmobil.kd_merk=tbmerk.kd_merk WHERE no_polisi='".$id."'");
                    $row = $result->fetch_object();
				?>
<body class="page__details">
	<main id="page-content">
		<div style="text-align: center;">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="breadcrumbs__title">Fleet</div>
						<div class="breadcrumbs__items">
							<div class="breadcrumbs__wrap">
								<div class="breadcrumbs__item">
									<a href="#" class="breadcrumbs__item-link">Home</a> <span>/</span> <a href="#" class="breadcrumbs__item-link">Sewa</a> <span>/</span> <a href="#" class="breadcrumbs__item-link"><?php echo $row->merk_mobil?> <?php echo $row->jenis_mobil?></a>
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

					<div class="model-details-box">
						<div class="model-details-box__inner">
							<div class="model-details-box__info">
								<h3 name="kd_sewa"><?php echo $row->merk_mobil?> <?php echo $row->jenis_mobil?></h3>
								<h6>FITUR KENDARAAN</h6>
								<table class="details-car">
									<tr>
										<th><?php echo $row->merk_mobil?> <?php echo $row->jenis_mobil?></th>
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
										<img src="admin/img/gambar/<?php echo $row->foto_mobil?>" alt="" />
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
									<div class="inner-half__width">
										<div>
											<input type="text" name="selisih_hari" placeholder="Selisih Hari" style="text-align: center; width: 75%;" id="txt2" onkeyup="sum()">
										</div>
										<div>
											<input type="text" name="total_sewa" placeholder="Total Sewa" style="text-align: center; width: 75%" id="txt3" readonly="">
										</div>	
									</div>
								</div>
								<div class="inner-half">
									<h5>Data Pemesan</h5>
										<div >
											<input type="text" name="first-name" value="<?php echo $_SESSION['kd_cs'] ?>" readonly="">
										</div>
										<div >
											<input type="text" name="last-name" value="<?php echo $_SESSION['nama_cs'] ?>" readonly="">
										</div>
									<h5>Data Mobil</h5>
										<div >
											<input type="text" name="no_polisi" value="<?php echo $row->no_polisi?>" readonly="">
										</div>
										<div>
											<input type="text" name="nama_mobil" value="<?php echo $row->merk_mobil?> <?php echo $row->jenis_mobil?>" readonly="">
										</div>
										<div >
											<input type="text" name="tarif_mobil" autofocus value="<?php echo $row->tarif_mobil?>"  readonly="" id="txt1" onfocus="sum()">
										</div>
								</div>
							</div>
							<a href="index.php?hal=detailsewa&id=<?php echo $row->no_polisi?>"><button type="button" class="btn" name="idlanjut">CONTINUE</button> </a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</main>
	<script type="text/javascript">
  function sum() {
      var txtFirstNumberValue = document.getElementById('txt1').value;
      var txtSecondNumberValue = document.getElementById('txt2').value;
      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('txt3').value = result;
      }
}
</script>
</body>
