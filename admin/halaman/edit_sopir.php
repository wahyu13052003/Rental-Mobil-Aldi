
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
        <h2><i class="glyphicon glyphicon-eye-open"></i> Edit Data Sopir</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <br />
                    <?php

                      $kode=$_GET['id'];
                      $tampil=$koneksi->query("SELECT * FROM tbsopir WHERE kd_sopir='".$kode."'");
                      $data=$tampil->fetch_object();
                    ?>
                    <form action="" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >ID</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" readonly="" name="kd_sopir" value="<?php echo $data->kd_sopir?>" class="form-control col-md-9 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Sopir</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nama_sopir" value="<?php echo $data->nama_sopir?>" class="form-control col-md-9 col-xs-12">
                        </div>
                      </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Jenis Kelamin</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="kelamin_sopir" value="<?php echo $data->kelamin_sopir?>" class="form-control col-md-9 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Umur</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="umur_sopir" value="<?php echo $data->umur_sopir?>" class="form-control col-md-9 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Telepon</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="tlp_sopir" value="<?php echo $data->tlp_sopir?>" class="form-control col-md-9 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Alamat</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="alamat_sopir" value="<?php echo $data->alamat_sopir?>" class="form-control col-md-9 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Tarif</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="tarif_sopir" value="<?php echo $data->tarif_sopir?>" class="form-control col-md-9 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="submit" name="edit">Edit</button>
                          <a href="index.php?page=sopir"><button type="button" name="batal" class="btn btn-default">Batal</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

            </div>
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
<?php

if (isset($_POST['edit']))
{
  $kd_sopir     =$_POST['kd_sopir'];
  $nama_sopir   =$_POST['nama_sopir'];
  $kelamin_sopir=$_POST['kelamin_sopir'];
  $umur_sopir   =$_POST['umur_sopir'];
  $tlp_sopir    =$_POST['tlp_sopir'];
  $alamat_sopir =$_POST['alamat_sopir'];
  $tarif_sopir  =$_POST['tarif_sopir'];

  $simpan=$koneksi->query("UPDATE tbsopir SET nama_sopir= '".$nama_sopir."', kelamin_sopir= '".$kelamin_sopir."', umur_sopir= '".$umur_sopir."', tlp_sopir= '".$tlp_sopir."', alamat_sopir= '".$alamat_sopir."', tarif_sopir= '".$tarif_sopir."' WHERE kd_sopir= '".$kd_sopir."'");
      if ($simpan){
        echo "<script>
            alert ('Data Berhasil dirubah');
            window.location.href='index.php?page=sopir';</script>";

    }else{
        echo"<script>alert('Data Tidak Berhasil dirubah');</script>";
    }
}
?>