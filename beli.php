<?php
session_start();

$id_barang = $_GET['id'];

if (isset($_SESSION['keranjang'][$id_barang])) 
{
	$_SESSION['keranjang'][$id_barang]+=1;
}else {
	$_SESSION['keranjang'][$id_barang] = 1;
}


echo "<script>Barang masuk ke keranjang belanja</script>";
echo "<script>location='keranjang.php';</script>";
