<?php
session_start();
include 'koneksi.php';
if (!isset($_SESSION['user'])) 
{
    echo "<script>alert('Anda Harus Login')</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
}

$idpem = $_GET["id"];
$ambil = $koneksi->query("SELECT * FROM transaksi WHERE id_transaksi='$idpem'");
$detpem = $ambil->fetch_assoc();

$id_pelanggan_beli = $detpem["id_user"];
$id_pelanggan_login = $_SESSION["user"]["id_user"];

if ($id_pelanggan_login!==$id_pelanggan_beli) 
{
	echo "<script>alert('gak gitu cara kerjanya');</script>";
	echo "<script>location='riwayat.php';</script>";
	exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<title>Sepatu Galih</title>
	<!--===============================================================================================-->
	<link rel="apple-touch-icon" href="assets/img/icon-apk.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/gsepatu.ico">
	<!--===============================================================================================-->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
	<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
	<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
	<!--===============================================================================================-->
	<link href="themes/css/flexslider.css" rel="stylesheet"/>
	<link href="themes/css/main.css" rel="stylesheet"/>
	<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">
	<!--===============================================================================================-->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<!--===============================================================================================-->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />
	<!--===============================================================================================-->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />
	<!--===============================================================================================-->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<!--===============================================================================================-->
	<link rel="stylesheet" href="themes/css/foooter.css">
	<link rel="stylesheet" href="themes/css/style.css">
	<link rel="stylesheet" href="csss/style.css">
	

</head>

<body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
				</div>
				<div class="span11">
					<div class="account pull-right">
						<ul class="user-menu">
							<li><a href="home.php">Home</a></li>
							<li class="dropdown mega-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Merk <i class="fa fa-caret-down"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-2">
										<ul class="list-links">
											<li><a href="nike.php">Nike</a></li>
											<li><a href="converse.php">Converse</a></li>
											<li><a href="nb.php">New Balance</a></li>
											<li><a href="vans.php">Vans</a></li>
											<li><a href="puma.php">Puma</a></li>
											</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="dropdown mega-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Pembayaran <i class="fa fa-caret-down"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-2">
										<ul class="list-links">
											<li><a href="keranjang.php">Keranjang</a></li>
											<li><a href="riwayat.php">Riwayat</a></li>
											<li><a href="checkout.php">Checkout</a></li>
											<li><a href="logout.php">Logout</a></li>
											</ul>
									</div>
								</div>
							</div>
						</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a class="logo pull-left"><form action="pencarian.php" method="GET">
							<input class="input search-input" type="text" name="keyword" placeholder="Sepatu Galih">
						</form></a>
					
				</div>
			</section>
	<!-- /NAVIGATION -->


	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="home.php">Home.</a></li>
				<li class="active">Bayar</li>
			</ul>
		</div>
	</div>


<!-- ISI -->
		
		<div class="container">
			<h2>Konfirmasi Pembayaran</h2>
			<p>Kirim Bukti Pembayaran Anda</p>
			<div class="alert alert-info">Total Tagihan Anda <strong> Rp. <?php echo number_format($detpem["total_transaksi"]) ?></strong></div>

		<form method="post" enctype="multipart/form-data">
			<div class="form-group">
			<label>Nama</label>
			<input type="text" class="form-control" name="nama">
			</div>
			<div class="form-group">
			<label>Bank</label>
			<input type="text" class="form-control" name="bank">
			</div>
			<div class="form-group">
			<label>Jumlah</label>
			<input type="number" class="form-control" name="jumlah" min="1">
			</div>
			<div class="form-group">
			<label>Bukti</label>
			<input type="file" class="form-control" name="bukti">
			<p class="text-danger">format foto harus JPG</p>
			</div>
			<button class="btn btn-primary" name="kirim">Kirim</button>
		</div>
	</form>

	<?php
		if (isset($_POST["kirim"])) 
		{
			$namabukti = $_FILES["bukti"]["name"];
			$lokasibukti = $_FILES["bukti"]["tmp_name"];
			$namafiks = date("YmdHis").$namabukti;
			move_uploaded_file($lokasibukti,"img/bukti/$namafiks");

			$nama = $_POST["nama"];
			$bank = $_POST["bank"];
			$jumlah = $_POST["jumlah"];
			$tanggal = date("Y-m-d");


			$koneksi->query("INSERT INTO pembayaran(id_transaksi,nama,bank,jumlah,tanggal,bukti)
				VALUES('$idpem','$nama','$bank','$jumlah','$tanggal','$namafiks')");

			$koneksi->query("UPDATE transaksi SET status_pembelian='sudah kirim pembayaran' WHERE id_transaksi='$idpem'");

				echo "<script>alert('Terimakasih sudah mengirimkan bukti pembayaran');</script>";
				echo "<script>location='riwayat.php';</script>";

		}
	?>
		
		
<!-- /ISI -->
			<!-- awal footer -->
			<footer class="footer-distributed">

			<div class="footer-left">
				<h3>Sepatu <span>Galih</span></h3>
				<p class="footer-links">
					<a href="home.php">Home</a>
					|
					<a href="checkout.php">Checkout</a>
					|
					<a href="riwayat.php">Riwayat</a>
				</p>
			</div>

			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					<p>Jl Klayatan Gang 3</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>0819-3693-3854</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:dinatakusuma877@gmail.com">dinatakusuma877@gmail.com</a></p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>About the company</span>
					<strong>Sepatu Galih</strong> adalah platform jual beli sepatu yang membuat tampilan 
					atau gaya anda semakin keren dengan harga yang terjangkau
				</p>
				<div class="footer-icons">
					<a href="https://www.facebook.com/galihkusumadinataa"><i class="fa fa-facebook"></i></a>
					<a href="https://www.instagram.com/galih._.kusuma/"><i class="fa fa-instagram"></i></a>
					<a href="https://twitter.com/galihkusuma2004"><i class="fa fa-twitter"></i></a>
				</div>
			</div>
			</footer>
			<section class="footer-section-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-15 footer-bottom-left">
						<p>Copyright © 2022 SepatuGalih. All Rights Reserved</p>
					</div>
					</div>
					<!-- akhir footer -->
	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>