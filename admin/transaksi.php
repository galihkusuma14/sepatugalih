<h2>Data Pembelian</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama User</th>
            <th>Tanggal</th>
            <th>Total</th>
            <th>Alamat Pembelian</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor=1; ?>
         <?php $ambil=$koneksi->query("SELECT * FROM transaksi JOIN user ON transaksi.id_user=user.id_user"); ?>
        <?php while($pecah = $ambil->fetch_assoc()){ ?>
        <tr>
            <td> <?php echo $nomor; ?> </td>
            <td> <?php echo $pecah['username'];?></td>
            <td> <?php echo $pecah['tanggal_transaksi'];?></td>
            <td> <?php echo $pecah['total_transaksi'];?></td>
            <td> <?php echo $pecah['alamat_pengiriman'];?></td>
            <td> <?php echo $pecah['status_pembelian'];?></td>
            <td><a href="index.php?halaman=hapustransaksi&id=<?php echo $pecah['id_transaksi']; ?>"class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">hapus</a>
				<?php if ($pecah['status_pembelian']=="sudah kirim pembayaran"): ?>
				<a href="index.php?halaman=pembayaran&id=<?php echo $pecah['id_transaksi'] ?>" class="btn btn-success">Lihat pembayaran</a>
				<?php endif ?>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>