<?PHP
  $kodeMax  =$koneksi->query("SELECT MAX(kd_sopir) AS no FROM tbsopir");
  $kode     = $kodeMax->fetch_object();
  $lastkode = $kode->no;
  $nextkode = substr($lastkode, 1, 4) +1;
  $id_sopir='S'.sprintf('%02s', $nextkode);
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
                <a href="#">Data Sopir</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-eye-open"></i> Tampil Data Sopir</h2>
        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <?php if ($_SESSION['level']=="admin"){?>
    <button type="button" class="btn btn-primary btn-xs pull-right" data-toggle="modal" data-target=".bs-example-modal-md"><i class="fa fa-plus"></i>Tambah Sopir</button>
    <?php } ?>
    <div>
      <a href="laporan/laporan_sopir.php" target="_blank"><button type="button" class="btn btn-primary btn-xs pull-right" style="margin-right: 2%;">Cetak Laporan</button></a>
    </div>
    <div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Tambah Sopir</h4>
                        </div>
                        <div class="modal-body">
                          <form  method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left" >
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">ID</label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" name="kd_sopir"  readonly="" value="<?=$id_sopir?>"  class="form-control">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Sopir</label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" name="nama_sopir" required="" class="form-control">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" name="kelamin_sopir" required="" class="form-control">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Umur</label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" name="umur_sopir" required="" class="form-control">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Telepon</label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" name="tlp_sopir" required="" class="form-control">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea name="alamat_sopir" required="" class="form-control"></textarea>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Tarif Sewa</label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="number" name="tarif_sopir" required="" class="form-control">
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
        <th class="text-center">ID</th>
        <th class="text-center">Nama Sopir</th>
        <th class="text-center" style="width: 12%;">Jenis Kelamin</th>
        <th class="text-center" style="width: 9%;">Umur</th>
        <th class="text-center" style="width: 11%;">Telepon</th>
        <th class="text-center" style="width: 20%;">Alamat</th>
        <th class="text-center" style="width: 9%;">Tarif</th>
        <?php if ($_SESSION['level']=="admin"){?>
        <th class="text-center">Aksi</th>
        <?php } ?>
    </tr>
    </thead>
    <tbody>
                                    <?PHP 
                                          $tampil=$koneksi->query("SELECT * FROM tbsopir ORDER BY kd_sopir");
                                          $jumlah_data=$tampil->num_rows;
                                          if($jumlah_data>0){
                                            while($row = $tampil->fetch_object()){?>
                                            <tr>
                                              <td class='text-center' width='10px'><?php echo"$row->kd_sopir";?></td>
                                              <td class='text-center'><?php echo"$row->nama_sopir";?></td> 
                                              <td class='text-center'><?php echo"$row->kelamin_sopir";?></td>
                                              <td class='text-center'><?php echo"$row->umur_sopir";?></td>
                                              <td class='text-center'><?php echo"$row->tlp_sopir";?></td>
                                              <td><?php echo"$row->alamat_sopir";?></td>
                                              <td class='text-center'><?php echo"$row->tarif_sopir";?></td>
                                              <?php if ($_SESSION['level']=="admin"){?>
                                              <td colspan='2' class='text-center' width='80px'>
                                                 <a href='index.php?page=editsopir&id=<?php echo"$row->kd_sopir";?>' class='btn btn-warning btn-xs'><i class='fa fa-pencil'></i> Edit </a>
                                                 <a href='halaman/hapus_sopir.php?id=<?php echo"$row->kd_sopir";?>' class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i> Hapus </a>
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
  
  $kd_sopir=$_POST['kd_sopir'];
  $nama_sopir=$_POST['nama_sopir'];
  $kelamin_sopir=$_POST['kelamin_sopir'];
  $umur_sopir=$_POST['umur_sopir'];
  $tlp_sopir=$_POST['tlp_sopir'];
  $alamat_sopir=$_POST['alamat_sopir'];
  $tarif_sopir=$_POST['tarif_sopir'];
  $querymasuk="INSERT INTO tbsopir(kd_sopir, nama_sopir, kelamin_sopir, umur_sopir, tlp_sopir, alamat_sopir, tarif_sopir) VALUE ('$kd_sopir', '$nama_sopir', '$kelamin_sopir', '$umur_sopir', '$tlp_sopir', '$alamat_sopir', '$tarif_sopir')";
  $masuk=$koneksi->query($querymasuk);
  if($masuk){
    echo "<script>alert('Data Sopir Berhasil di Simpan !');window.location='index.php?page=sopir'</script>";
  }

    }
?>
