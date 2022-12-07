<?php
session_start();
$koneksi = new mysqli("localhost","root","","sepatugalih");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="apple-touch-icon" href="assets/img/icon-apk.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/gsepatu.ico">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="csss/daftar.css">

</head>
<body>
	
	<div class="container">
			<div class="login">
				<form method="post">
					<h1>DAFTAR</h1>
					
					<p></p>
					<label >Username</label>
					<input type="text" placeholder="Username" name="username">
					<label >Password</label>
					<input type="password" placeholder="Password" name="password">
					<label >Email</label>
					<input type="email" placeholder="Email" name="email">
					<button type="submit" name="daftar">Daftar</button>
					<p>Sudah memiliki Akun? <a href="login.php">Masuk</a></p>
				</form>
			</form>
			</div>
		</div>
<?php
if (isset($_POST["daftar"])) 
{

  $username = $_POST["username"];
  $password = $_POST["password"];
  $email = $_POST["email"];

  $ambil = $koneksi->query("SELECT*FROM user WHERE email='$email'");
  $yangcocok = $ambil->num_rows;
  if ($yangcocok==1) 
  {
  	echo "<script>alert('pendaftaran gagal, email sudah digunakan');</script>";
  	echo "<script>location='daftar.php';</script>";
  }
  else
  {
  	$koneksi->query("INSERT INTO user(username,password,email) VALUES ('$username','$password','$email')");

  	echo "<script>alert('pendaftaran sukses, silahkan login');</script>";
  	echo "<script>location='login.php';</script>";
  }

}
?>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>