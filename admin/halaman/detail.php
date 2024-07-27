<?php 
$x   = isset($_GET['id']) ? $_GET['id'] : NULL;
$act      = isset($_GET['act']) ? $_GET['act'] : NULL; 

if ($act == "del") {
      $delete=$koneksi->query("DELETE FROM tbdetailsewa WHERE kd_detail = '".$x."'");
    
    if ($delete) {
      echo "<script>alert('Data Merk Mobil Berhasil di Simpan !');window.location='index.php?page=detail'</script>";
  } else {
    echo "<script>alert('Data Merk Mobil Berhasil di Simpan !');window.location='index.php?page=detail'</script>";
  }

}else if ($act == "konfirmasi") {
      $update=$koneksi->query("UPDATE tbdetailsewa SET ket='Sudah di Konfirmasi' WHERE kd_detail = '".$x."' ");
    
    if ($update) {
      echo "<script>alert('Sudah di Konfirmasi !');window.location='index.php?page=detail'</script>";
  } else {
    echo "<script>alert('Gagal Konfirmasi !');window.location='index.php?page=detail'</script>";
  }
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="../css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="../css/charisma-app.css" rel="stylesheet">
    <link href='../bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='../bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='../bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='../bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='../bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='../bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='../css/jquery.noty.css' rel='stylesheet'>
    <link href='../css/noty_theme_default.css' rel='stylesheet'>
    <link href='../css/elfinder.min.css' rel='stylesheet'>
    <link href='../css/elfinder.theme.css' rel='stylesheet'>
    <link href='../css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='../css/uploadify.css' rel='stylesheet'>
    <link href='../css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="../bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        

        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="#" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
                <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Data Detail</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Tampil Data Detail</h2>


        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    
    <div class="box-content">
                           <div>
                        <!--ini form untuk memanggil laporan sesuai parameter bulan dan tahun-->
                                <form action="laporan/laporan_detail.php" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <select name="bulan">
                                        <option value="">-- Pilih Bulan --</option>
                                        <option value="01">Januari</option>
                                        <option value="02">Februari</option>
                                        <option value="03">Maret</option>
                                        <option value="04">April</option>
                                        <option value="05">Mei</option>
                                        <option value="06">Juni</option>
                                        <option value="07">Juli</option>
                                        <option value="08">Agustus</option>
                                        <option value="09">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                    <select name="tahun">
                                        <?php 
                                        $mulai = date('Y') - 10;
                                        for ($i = $mulai;$i<$mulai + 50;$i++){
                                            $sel = $i == date('Y') ? 'selected="selected"' : '';
                                            echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                                            } ?>
                                    </select>
                                    <input name="tb_act" class="btn btn-primary" type="submit" value="Cetak">
                                    </div>
                                </div>
                                </form>
                                <!--sampai sini -->
                                </div>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th class="text-center" style="width: 2%;">ID</th>
        <th class="text-center" style="width: 8%;">Nama CS</th>
        <th class="text-center" style="width: 12%;">Mobil</th>
        <th class="text-center" style="width: 7%;">Nama Sopir</th>
        <th class="text-center" style="width: 9%;">Tanggal Sewa</th>
        <th class="text-center" style="width: 5%;">Tanggal Kembali</th>
        <th class="text-center" style="width: 7%;">Total Harga</th>
        <th class="text-center" style="width: 7%;">Keterangan</th>
        <?php if ($_SESSION['level']=="admin"){?>
        <th class="text-center" style="width: 10%;">Aksi</th>
        <?php } ?>
    </tr>
    </thead>
    <tbody>
                                        <?PHP 
                                          $tampil=$koneksi->query("SELECT * FROM tbdetailsewa LEFT JOIN tbcostumer ON tbdetailsewa.kd_cs=tbcostumer.kd_cs LEFT JOIN tbsewa ON tbdetailsewa.kd_sewa=tbsewa.kd_sewa LEFT JOIN tbmobil ON tbsewa.no_polisi=tbmobil.no_polisi LEFT JOIN tbmerk ON tbmobil.kd_merk=tbmerk.kd_merk LEFT JOIN tbsopir ON tbdetailsewa.kd_sopir=tbsopir.kd_sopir");
                                          $jumlah_data=$tampil->num_rows;
                                          if($jumlah_data>0){
                                            while($row = $tampil->fetch_object()){?>
                                            <tr>
                                              <td class='text-center' width='10px'><?php echo"$row->kd_detail";?></td>
                                              <td class='text-center'><?php echo"$row->nama_cs";?></td> 
                                              <td class='text-center'><?php echo"$row->no_polisi";?>-<?php echo"$row->merk_mobil";?> <?php echo"$row->jenis_mobil";?></td>
                                              <td class='text-center'><?php echo"$row->nama_sopir";?></td>
                                              <td class='text-center'><?php echo"$row->tgl_sewa";?></td>
                                              <td class='text-center'><?php echo"$row->tgl_kembali";?></td>
                                              <td class='text-center'><?php echo"$row->total_harga";?></td>
                                              <td class='text-center'><?php echo"$row->ket";?></td>
                                              <?php if ($_SESSION['level']=="admin"){?>
                                              <td class="taskOptions" colspan="2">
                                                        <?php if($row->ket == 'Belum di Konfirmasi'){ ?><center><a href="index.php?page=detail&act=konfirmasi&id=<?php echo "$row->kd_detail";?>" >Konfirmasi |</a>
                                                        <?php } ?><a href="index.php?page=detail&act=del&id=<?php echo "$row->kd_detail";?>">Hapus</a></center>
                                              </td> 
                                              <?php } ?>  
                                            </tr>
                                            <?php 
                                            ;
                                                 
                                               }
                                              }else{
                                                echo "<tr><td colspan='9'>Data Kosong</td></tr>";
                                              }
                                          ?>

    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad ends -->

    <hr>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="../js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='../bower_components/moment/min/moment.min.js'></script>
<script src='../bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='../js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="../bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="../bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="../js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="../bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="../bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="../js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="../js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="../js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="../js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="../js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="../js/charisma.js"></script>


</body>
</html>