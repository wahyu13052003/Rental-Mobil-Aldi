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
                <a href="#">Data Mobil</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-book"></i> Tampil Data Mobil</h2>
        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <?php if ($_SESSION['level']=="admin"){?>
    <button type="button" class="btn btn-primary btn-xs pull-right" data-toggle="modal" data-target=".bs-example-modal-md"><i class="fa fa-plus"></i>Tambah Mobil</button>
    <?php } ?>
    <div>
      <a href="laporan/laporan_mobil.php" target="_blank"><button type="button" class="btn btn-primary btn-xs pull-right" style="margin-right: 2%;">Cetak Laporan</button></a>
    </div>
    <div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Tambah Mobil</h4>
                        </div>
                        <div class="modal-body">
                          <form  method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left" >
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">No Polisi</label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" name="no_polisi" required="" class="form-control">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Merk Mobil</label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select name="kd_merk" class="form-control">
                                  <?php
                                  $tampil=$koneksi->query("SELECT * FROM tbmerk");
                                  while ($row = $tampil->fetch_object()) {
                                    echo "<option value='$row->kd_merk'>$row->merk_mobil - $row->jenis_mobil</option>";
                                    }
                                  ?>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Uplode Foto</label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="file" name="foto" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" required="" class="form-control">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Tarif</label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="number" name="tarif_mobil" required="" class="form-control">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan</label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" name="keterangan" required="" class="form-control">
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                              <button type="submit" name="simpan" value="Lanjut" class="btn btn-primary">Simpan</button>
                            </div>
                          </form>
                        </div>

                      </div>
                    </div>
                  </div>
          
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th class="text-center">No Polisi</th>
        <th class="text-center">Mobil</th>
        <th class="text-center" >Foto</th>
        <th class="text-center" >Tarif</th>
        <th class="text-center" >Keterangan</th>
        <th class="text-center" >Status</th>
        <?php if ($_SESSION['level']=="admin"){?>
        <th class="text-center">Aksi</th>
        <?php } ?>
    </tr>
    </thead>
    <tbody>
                                    <?php 
                                          $tampil=$koneksi->query("SELECT * FROM tbmobil INNER JOIN tbmerk ON tbmobil.kd_merk = tbmerk.kd_merk");
                                          $jumlah_data=$tampil->num_rows;
                                          if($jumlah_data>0){
                                            while($row = $tampil->fetch_object()) {?>
                                            <tr>
                                              <td class='text-center' width='10%'><?php echo"$row->no_polisi";?></td>
                                              <td class='text-center' width='13%'><?php echo"$row->merk_mobil - $row->jenis_mobil";?></td> 
                                              <td class='text-center' width='30px'><img src="img/gambar/<?php echo "$row->foto_mobil"; ?>" widht='50px' height='50px'></td>
                                              <td class='text-center' width='10%'><?php echo"$row->tarif_mobil";?></td>
                                              <td class='text-center'><?php echo"$row->keterangan";?></td>
                                              <td class='text-center' width='10%'><?php echo"$row->status";?></td>
                                              <?php if ($_SESSION['level']=="admin"){?>
                                              <td colspan='2' class='text-center' width='10%'>
                                                 <a href='index.php?page=editmobil&id=<?php echo "$row->no_polisi";?>' class='btn btn-warning btn-xs'><i class='fa fa-pencil'></i> Edit </a>
                                                 <a href='halaman/hapus_mobil.php?id=<?php echo "$row->no_polisi";?>'  class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i> Hapus </a>
                                              </td>
                                              <?php } ?>
                                            </tr>
                                            <?php
                                            ;
                                               }
                                              }else{
                                                echo "<tr><td colspan='8'>Data Kosong</td></tr>";
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
<?PHP 

if (isset($_POST['simpan'])) {
  
  $namaphoto  = $_FILES['foto']['name'];
  $type       = $_FILES['foto']['type'];
  $ukuran     = $_FILES['foto']['size'];

  $no_polisi    = $_POST['no_polisi'];
  $kd_merk      = $_POST['kd_merk'];
  $tarif_mobil  = $_POST['tarif_mobil'];
  $keterangan   = $_POST['keterangan'];
    if ($type != "image/gif" && $type != "image/jpg" && $type != "image/jpeg" ) {
        echo "<script>alert('format harus jpg/jpeg/gif');
        window.location.href='index.php?page=mobil';</script>";
    }else if($ukuran>10000000){
        echo "<script>alert('Gambar maximal 10 MB');
        window.location.href='index.php?page=mobil';</script>";
    }else{
        $uploadir = 'img/gambar/';
        $rnd = date("Y-m-d");
        $nama_file_upload=$rnd.'-'.$namaphoto;
        $alamatfile=$uploadir.$nama_file_upload;

              
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $alamatfile)) {
              $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM tbmobil WHERE no_polisi='".$no_polisi."'"));
              if ($cek > 0){
                echo "<script>alert('No Polisi sudah ada !');window.location='index.php?page=mobil'</script>";
              }else{
              $querymasuk="INSERT INTO tbmobil(no_polisi, kd_merk, foto_mobil, tarif_mobil, keterangan) VALUE ('$no_polisi', '$kd_merk', '$nama_file_upload', '$tarif_mobil', '$keterangan')";
              $masuk=$koneksi->query($querymasuk);

              $queryupdate="UPDATE tbmobil SET status='Tersedia' WHERE no_polisi= '".$no_polisi."'";
              $update=$koneksi->query($queryupdate);  
        if ($masuk&$update){
          echo "<script>alert('Data Mobil Berhasil di Simpan !');window.location='index.php?page=mobil'</script>";

        }else{
          echo"<script>alert('Data Tidak Berhasil disimpan');</script>";
        }
      } 
    }
  }
}
?>