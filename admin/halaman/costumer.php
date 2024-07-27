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
                <a href="#">Data Costumer</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Tampil Data Costumer</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
     <a href="laporan/laporan_cs.php" target="_blank"><button type="button" class="btn btn-primary btn-xs pull-right" style="margin-right: 2%;">Cetak Laporan</button></a>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nama Cs</th>
        <th class="text-center" style="width: 12%;">Jenis Kelamin</th>
        <th class="text-center" style="width: 9%;">Alamat</th>
        <th class="text-center" style="width: 10%;">Telepon</th>
        <th class="text-center" style="width: 9%;">Username</th>
        <th class="text-center" style="width: 5%;">Password</th>
        <th class="text-center" style="width: 9%;">Level</th>
        <?php if ($_SESSION['level']=="admin"){?>
        <th class="text-center" style="width: 9%;">Aksi</th>
        <?php } ?>
    </tr>
    </thead>
    <tbody>
                                        <?PHP 
                                          $tampil=$koneksi->query("SELECT * FROM tbcostumer ORDER BY kd_cs");
                                          $jumlah_data=$tampil->num_rows;
                                          if($jumlah_data>0){
                                            while($row = $tampil->fetch_object()){?>
                                            <tr>
                                              <td class='text-center' width='10px'><?php echo"$row->kd_cs";?></td>
                                              <td class='text-center'><?php echo"$row->nama_cs";?></td> 
                                              <td class='text-center'><?php echo"$row->kelamin_cs";?></td>
                                              <td class='text-center'><?php echo"$row->alamat_cs";?></td>
                                              <td><?php echo"$row->tlp_cs";?></td>
                                              <td class='text-center'><?php echo"$row->username_cs";?></td>
                                              <td class='text-center'><?php echo"$row->password_cs";?></td>
                                              <td class='text-center'><?php echo"$row->level_cs";?></td>
                                              <?php if ($_SESSION['level']=="admin"){?>
                                              <td colspan='2' class='text-center' width='80px'>
                                                 <a href='halaman/hapus_cs.php?id=<?php echo "$row->kd_cs";?>'  class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i> Hapus </a>
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