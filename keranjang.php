<?php
error_reporting(E_ALL ^ E_WARNING);
session_start();
include 'koneksi.php';
if (!isset($_SESSION['user'])) {
	echo "<script>alert('Anda Harus Login')</script>";
	echo "<script>location='login.php';</script>";
	header('location:login.php');
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
						<li class="dropdown mega-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Keranjang <i class="fa fa-caret-down"></i></a>
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

	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="home.php">Home.</a></li>
				<li class="active">Keranjang</li>
			</ul>
		</div>
	</div>

	<br>
	<section class="konten">
		<div class="container">
			<h1>Keranjang Belanja</h1>
			<hr>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Produk</th>
						<th>Ukuran</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>Total</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $nomor = 1; ?>
					<?php foreach ($_SESSION["keranjang"] as $id_barang => $jumlah) : ?>
						<?php
						$ambil = $koneksi->query("SELECT * FROM barang
					WHERE id_barang='$id_barang'");
						$pecah = $ambil->fetch_assoc();
						$total = $pecah["harga_barang"] * $jumlah;
						?>
						<tr>
							<td><?php echo $nomor; ?></td>
							<td><?php echo $pecah['nama_barang']; ?></td>
							<td><?php echo $pecah['ukuran_barang']; ?></td>
							<td>Rp. <?php echo number_format($pecah['harga_barang']); ?></td>
							<td><?php echo $jumlah; ?></td>
							<td>Rp. <?php echo number_format($total); ?></td>
							<td>
								<a href="hapuskeranjang.php?id=<?php echo $id_barang ?>" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						<?php $nomor++ ?>
					<?php endforeach ?>
				</tbody>
			</table>
			<a href="home.php" class="btn btn-default">Belanja Lagi</a>
			<a href="checkout.php" class="btn btn-primary">Pembayaran</a>
		</div>
	</section>

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
						<p>Copyright ?? 2022 SepatuGalih. All Rights Reserved</p>
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