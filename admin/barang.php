<h2> Data Barang </h2>
<a href="index.php?halaman=tambahbarang" class="btn btn-primary">Tambah Barang</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Kategori</th>
            <th>Foto</th>
			<th>Stok</th>
            <th>Ukuran</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor=1; ?>
         <?php $ambil=$koneksi->query("SELECT * FROM barang"); ?>
        <?php while($pecah = $ambil->fetch_assoc()){ ?>
        <tr>
            <td> <?php echo $nomor; ?> </td>
            <td> <?php echo $pecah['nama_barang'];?></td>
            <td> <?php echo $pecah['harga_barang'];?></td>
            <td> <?php echo $pecah['deskripsi_barang'];?></td>
            <td> <?php echo $pecah['kategori']; ?></td>
            <td>
                <img src="../img/<?php echo $pecah['foto_barang'];?>" width="100">

            </td>
			<td> <?php echo $pecah['stok_barang']; ?></td>
			<td> <?php echo $pecah['ukuran_barang']; ?></td>
            <td>
                <a href="index.php?halaman=hapusbarang&id=<?php echo $pecah['id_barang']; ?>"class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">hapus</a><br></br>
                <a href="index.php?halaman=ubahbarang&id=<?php echo $pecah['id_barang']; ?>"class="btn btn-warning">Ubah</a>
        </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
</table>


            