<?php
 session_start();
 session_destroy();
 echo"<script language='javascript'>alert('Anda Berhasil Logout !');
 window.location.href = 'login.php';</script>";
?>