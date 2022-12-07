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

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--===============================================================================================-->
		<title>Sepatu Galih</title>
		<!--===============================================================================================-->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
		<!--===============================================================================================-->
		<link rel="apple-touch-icon" href="assets/img/icon-apk.png">
    	<link rel="shortcut icon" type="image/x-icon" href="assets/img/gsepatu.ico">
		<!--===============================================================================================-->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<!--===============================================================================================-->
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		<!--===============================================================================================-->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!--===============================================================================================-->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--===============================================================================================-->
		<link rel="stylesheet" href="themes/css/foooter.css">
		<link rel="stylesheet" href="themes/css/style.css">
		<link rel="stylesheet" href="csss/style.css">
		
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a class="logo pull-left"><form action="pencarian.php" method="GET">
							<input class="input search-input" type="text" name="keyword" placeholder="Sepatu Galih">
						</form></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="home.php">Home</a></li>
							<li><a href="#">Merk</a>					
								<ul>
									<li><a href="nike.php">Nike</a></li>
									<li><a href="converse.php">Converse</a></li>
									<li><a href="nb.php">New Balance</a></li>
									<li><a href="vans.php">Vans</a></li>
									<li><a href="puma.php">Puma</a></li>		
								</ul>
							</li>
							<li><a href="#"><?php echo $_SESSION["user"]["username"]; ?></a>					
								<ul>
									<li><a href="keranjang.php">Keranjang</a></li>
									<li><a href="riwayat.php">Riwayat</a></li>
									<li><a href="checkout.php">Checkout</a></li>
									<li><a href="logout.php">Logout</a></li>

								</ul>
							</li>	
						</ul>
					</nav>
				</div>
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="detail.php?id=28"><img src="gambar/gambar1.jpg" alt="" /></a></p>
														<a href="detail.php?id=28" class="title">Sepatu Nike Air Max 95</a><br/>
														<p class="price">Rp500.000</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="detail.php?id=29"><img src="gambar/galih4.jpg" alt="" /></a></p>
														<a href="detail.php?id=29" class="title">Sepatu Nike Air Max 97</a><br/>
														<p class="price">Rp500.000</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="detail.php?id=25"><img src="gambar/galih14.jpg" alt="" /></a></p>
														<a href="detail.php?id=25" class="title">Sepatu Nike Air Max 97</a><br/>
														<p class="price">Rp500.000</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="detail.php?id=27"><img src="gambar/galih8.jpg" alt="" /></a></p>
														<a href="detail.php?id=27" class="title">Sepatu Nike Air Max 95</a><br/>
														<p class="price">Rp500.000</p>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="detail.php?id=30"><img src="gambar/galih10.jpg" alt="" /></a></p>
														<a href="detail.php?id=30" class="title">Sepatu Nike Air Force 1</a><br/>
														<p class="price">Rp500.000</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="detail.php?id=31"><img src="gambar/converse2.jpg" alt="" /></a></p>
														<a href="detail.php?id=31" class="title">Converse 70s</a><br/>
														<p class="price">Rp500.000</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="detail.php?id=32"><img src="gambar/converse3.jpg" alt="" /></a></p>
														<a href="detail.php?id=32" class="title">Converse 70s</a><br/>
														<p class="price">Rp500.000</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="detail.php?id=33"><img src="gambar/converse4.jpg" alt="" /></a></p>
														<a href="33" class="title">Converse 70s</a><br/>
														<p class="price">Rp500.000</p>
													</div>
												</li>																																	
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="detail.php?id=34"><img src="gambar/step1.jpg" alt="" /></a></p>
														<a href="detail.php?id=34" class="title">New Balance 574</a><br/>
														<p class="price">Rp500.000</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="detail.php?id=35"><img src="gambar/step4.jpg" alt="" /></a></p>
														<a href="detail.php?id=35" class="title">New Balance 530 Trainers White</a><br/>
														<p class="price">Rp500.000</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="detail.php?id=36"><img src="gambar/step5.jpg" alt="" /></a></p>
														<a href="detail.php?id=36" class="title">New Balance 990 V5</a><br/>
														<p class="price">Rp.500.000</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="detail.php?id=37"><img src="gambar/sepatu1.jpg" alt="" /></a></p>
														<a href="detail.php?id=37" class="title">Vans</a><br/>
														<p class="price">Rp500.000</p>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="detail.php?id=38"><img src="gambar/sepatu2.jpg" alt="" /></a></p>
														<a href="detail.php?id=38" class="title">Vans O</a><br/>
														<p class="price">Rp500.000</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="detail.php?id=39"><img src="gambar/sepatu5.jpg" alt="" /></a></p>
														<a href="detail.php?id=39" class="title">Vans S</a><br/>
														<p class="price">Rp500.000</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="detail.php?id=40"><img src="gambar/puma7.jpg" alt="" /></a></p>
														<a href="detail.php?id=40" class="title">Puma Suede</a><br/>
														<p class="price">Rp500.000</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="detail.php?id=41"><img src="gambar/puma8.jpg" alt="" /></a></p>
														<a href="41" class="title">Puma Suede</a><br/>
														<p class="price">Rp500.000</p>
													</div>
												</li>																																	
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>

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
									<div class="col-md-6 footer-bottom-left">
										<p>Copyright © 2022 SepatuGalih. All Rights Reserved</p>
									</div>
									</div>
									<!-- akhir footer -->

		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>