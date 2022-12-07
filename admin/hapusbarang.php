<?php

$ambil = $koneksi->query("SELECT * FROM barang WHERE id_barang='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotobarang = $pecah['foto_barang'];
if (file_exists("../img/$fotobarang")) 
{
unlink("../img/$fotobarang");
}

$koneksi->query("DELETE FROM barang WHERE id_barang='$_GET[id]'");

echo "<script>alert('barang terhapus');</script>";
echo "<script>location='index.php?halaman=barang';</script>";

?>
