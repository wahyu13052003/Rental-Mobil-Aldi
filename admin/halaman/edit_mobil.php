
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
        <h2><i class="glyphicon glyphicon-eye-open"></i> Edit Data Mobil</h2>

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
                      $tampil=$koneksi->query("SELECT * FROM tbmobil WHERE no_polisi='".$kode."'");
                      $data=$tampil->fetch_object();
                    ?>
                    <form action="" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >No Polisi</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" readonly="" name="no_polisi" value="<?php echo $data->no_polisi?>" class="form-control col-md-9 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Mobil</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="kd_merk" readonly="" value="<?php echo $data->kd_merk?>" class="form-control col-md-9 col-xs-12">
                        </div>
                      </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Foto</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <img class="img-responsive" src="img/gambar/<?php echo $data->foto_mobil?>"  widht="75px" height="75px"/>
                          <input class="form-control" type="file" name="foto" data-target="#pictureBtn" data-edit="insertImage">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Tarif Mobil</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="tarif_mobil" value="<?php echo $data->tarif_mobil?>" class="form-control col-md-9 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Keterangan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="keterangan" value="<?php echo $data->keterangan?>" class="form-control col-md-9 col-xs-12">
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
    $no_polisi    = $_POST['no_polisi'];
    $kd_merk      = $_POST['kd_merk'];
    $tarif_mobil  = $_POST['tarif_mobil'];
    $keterangan   = $_POST['keterangan'];
    $lokasi_photo=$_FILES['foto']['tmp_name'];

  if(empty($lokasi_photo)){
    $queryupdate="UPDATE tbmobil  SET  kd_merk= '".$kd_merk."',  tarif_mobil= '".$tarif_mobil."', keterangan= '".$keterangan."' WHERE no_polisi= '".$no_polisi."'";
    $update=$koneksi->query($queryupdate);

    if ($update){
         echo "<script>alert('Data Berhasil di Edit !');window.location='index.php?page=mobil'</script>";

    }else{
        echo"<script>alert('Data tidak berhasil di edit);</script>";
    }
} else {

    $kd_merk      = $_POST['kd_merk'];
    $tarif_mobil  = $_POST['tarif_mobil'];
    $keterangan   = $_POST['keterangan'];

    $namaphoto =$_FILES['foto']['name'];
    $type       =$_FILES['foto']['type'];
    $ukuran     =$_FILES['foto']['size'];

    if ($type != "image/gif" && $type != "image/jpg" && $type != "image/jpeg") {
        echo "<script> alert ('Format harus jpg/jpeg/gif');</script>";
    }elseif ($ukuran > 10000000) {
        echo "<script> alert ('Gambar Maksimal 10 Mb');</script>";
    }else{
        $uploadir           ='img/gambar/';
        $rnd                =date("Y-m-d");
        $nama_file_upload   = $rnd.'-'.$namaphoto;
        $alamatfile         = $uploadir.$nama_file_upload;

    if(move_uploaded_file($_FILES['foto']['tmp_name'], $alamatfile)) {

    $SQL=$koneksi->query("SELECT foto_mobil FROM tbmobil WHERE no_polisi='".$no_polisi."'");
    $jumlah_data=$SQL->num_rows;
    if($jumlah_data>0){
      while($row=$SQL->fetch_object()){
      if(file_exists("img/gambar/$row->foto_mobil")){
        unlink("img/gambar/$row->foto_mobil");
    }   
    
  }
}
        $simpan=$koneksi->query("UPDATE tbmobil SET  kd_merk= '".$kd_merk."', foto_mobil= '".$nama_file_upload."', tarif_mobil= '".$tarif_mobil."', keterangan= '".$keterangan."' WHERE no_polisi= '".$no_polisi."'");
        if ($simpan){
        echo "<script>alert('Data Berhasil di Simpan !');window.location='index.php?page=mobil'</script>";

        }else{
            echo"<script>alert('Data Tidak Berhasil di Simpan');</script>";
        }
 }
}
}
}
?>
