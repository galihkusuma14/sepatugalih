<?php

$ambil = $koneksi->query("SELECT * FROM user WHERE id_user='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM user WHERE id_user='$_GET[id]'");

echo "<script>alert('User terhapus');</script>";
echo "<script>location='index.php?halaman=user';</script>";

?>
