<h2>Tambah Barang</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
        <label>Harga (Rp)</label>
        <input type="number" class="form-control" name="harga">
    </div>
    <div class="form-group">
        <label>Foto Barang</label>
        <input type="file" class="form-control" name="foto">
    </div>
    <div class="form-group">
        <label>Deskripsi Barang</label>
        <input type="text" class="form-control" name="deskripsi">
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
        <input type="number" min='1' class="form-control" name="stok">
    </div>
    <div class="form-group">
        <label>Ukuran Barang</label>
        <input type="text" class="form-control" name="ukuran">
    </div>
    <button class="btn btn-primary" name="save">Tambah</button>
</form>
<?php
if (isset($_POST['save']))
{
    $nama = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "../img/".$nama);
    $koneksi->query("INSERT INTO barang(nama_barang,harga_barang,foto_barang,deskripsi_barang,kategori,stok_barang,ukuran_barang)
    VALUES('$_POST[nama]','$_POST[harga]','$nama','$_POST[deskripsi]','$_POST[kategori]','$_POST[stok]','$_POST[ukuran]')");
    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=barang'>";
}
?>