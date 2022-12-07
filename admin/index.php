﻿<?php
session_start();
$koneksi = new mysqli("localhost","root","","sepatugalih");

if (!isset($_SESSION['admin'])) 
{
    echo "<script>alert('Anda Harus Login')</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
}



?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Halaman Admin</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- MORRIS CHART STYLES-->
  <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="assets/css/custom.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  <link rel="apple-touch-icon" href="assets/img/icon-apk.png">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/gsepatu.ico">

  <link href="assets/css/style.css" rel="stylesheet"/>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Hal Admin</a> 
            </div>
            <div style="color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;">&nbsp; <a href="index.php?halaman=logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    
                    
                    
                    <li><a href="index.php"><i class="fa fa-dashboard fa-2x"></i> Dashboard</a></li>
                    <li><a href="index.php?halaman=user"><i class="fa fa-user fa-2x"></i> Manage User</a></li>
                    <li><a href="index.php?halaman=barang"><i class="fa fa-tag fa-2x"></i> Manage Barang</a></li>
                    <li><a href="index.php?halaman=transaksi"><i class="fa fa-shopping-cart fa-2x"></i> Manage Transaksi</a></li>


                </ul>
                
            </li>
        </ul>
    </li>  
</ul>

</div>

</nav>  
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <?php
         if (isset($_GET['halaman']))
        {
            if ($_GET['halaman']=="user")
            {
                include 'user.php';
            }
            elseif ($_GET['halaman']=="barang")
            {
                include 'barang.php';
            }
            elseif ($_GET['halaman']=="transaksi")
            {
                include 'transaksi.php';
            }
            elseif ($_GET['halaman']=="tambahbarang")
            {
                include 'tambahbarang.php';
            }
            elseif ($_GET['halaman']=="hapusbarang")
            {
                include 'hapusbarang.php';
            }
            elseif ($_GET['halaman']=="hapustransaksi")
            {
                include 'hapustransaksi.php';
            }
            elseif ($_GET['halaman']=="ubahbarang") 
            {
                include 'ubahbarang.php';
            }
            elseif ($_GET['halaman']=="hapususer")
            {
              include 'hapususer.php';
            }
            elseif ($_GET['halaman']=="logout")
            {
              include 'logout.php';
            }
		        elseif ($_GET['halaman']=="pembayaran")
            {
              include 'pembayaran.php';
            }
      }

    
    else
    {
        include 'home.php';
    }
    ?>
</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- MORRIS CHART SCRIPTS -->
<script src="assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="assets/js/morris/morris.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>


</body>
</html>