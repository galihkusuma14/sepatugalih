<h2>Ubah</h2>
<?php
$ambil=$koneksi->query("SELECT * FROM barang WHERE id_barang='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data">
<div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_barang']; ?>">
    </div>
    <div class="form-group">
        <label>Harga (Rp)</label>
        <input type="number" class="form-control" name="harga" value="<?php echo $pecah['harga_barang']; ?>">
    </div>
    <div class="form-group">
        <img src="../img/<?php echo $pecah['foto_barang'] ?>" width="200" >
    </div>
    <div class="form-group">
    <label> Ganti Foto </label>
    <input type="file" name="foto" class="form-control">    
    </div>
    <div class="form-group">
        <label>Ganti Deskripsi</label>
        <input type="text" class="form-control" name="deskripsi" value="<?php echo $pecah['deskripsi_barang']; ?>">
    </div>
    <div class="form-group">
    <select name="kategori">
        <option value="nike">Nike</option>
        <option value="converse">Converse</option>
        <option value="nb">New Balance</option>
        <option value="vans">Vans</option>
        <option value="puma">Puma</option>
    </select>
</div>
	    <div class="form-group">
        <label>Stok Barang</label>
        <input type="number" min='1' class="form-control" name="stok" placeholder="<?php echo $pecah['stok_barang'] ?>">
    </div>
    <div class="form-group">
        <label>Ganti Ukuran</label>
        <input type="text" class="form-control" name="ukuran" value="<?php echo $pecah['ukuran_barang']; ?>">
    </div>
<button class="btn btn-primary" name="ubah">Ubah</button>
</form>
<?php
if (isset($_POST['ubah'])) 
{
    $namafoto=$_FILES['foto'] ['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];
    if (!empty($lokasifoto))
    {
        move_uploaded_file($lokasifoto, "../img/$namafoto");

        $koneksi->query("UPDATE barang SET nama_barang='$_POST[nama]',
        harga_barang='$_POST[harga]',
        foto_barang='$namafoto' WHERE id_barang='$_GET[id]'");
    }
    else
    {
        $koneksi->query("UPDATE barang SET nama_barang='$_POST[nama]',
        harga_barang='$_POST[harga]',
        deskripsi_barang='$_POST[deskripsi]',
        kategori='$_POST[kategori]',
		stok_barang='$_POST[stok]',
        ukuran_barang='$_POST[ukuran]'
        WHERE id_barang='$_GET[id]'");
    }
    echo"<script>alert('Data Barang telah diubah');</script>";
    echo"<script>location='index.php?halaman=barang'</script>";
}
?>