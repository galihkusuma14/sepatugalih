<h2>Data pembayaran</h2>

<?php 

$id_transaksi = $_GET['id'];

$ambil = $koneksi->query("SELECT * FROM pembayaran WHERE id_transaksi='$id_transaksi'");
$detail = $ambil->fetch_assoc();
?>

<div class="row">
	<div class="col-md-6">
		<table class="table">
			<tr>
				<th>Nama</th>
				<td><?php echo $detail['nama']; ?></td>
			</tr>
			<tr>
				<th>Bank</th>
				<td><?php echo $detail['bank']; ?></td>
			</tr>
			<tr>
				<th>Jumlah</th>
				<td><?php echo number_format($detail['jumlah']); ?></td>
			</tr>
			<tr>
				<th>Tanggal</th>
				<td><?php echo $detail['tanggal']; ?></td>
			</tr>
		</table>
	</div>
	<div class="col-md-6">
		<img src="../img/bukti/<?php echo $detail['bukti'] ?>" alt="" class="img-responsive">
	</div>
</div>
<form method="post">
	<div class="form-group">
		<label>Resi Pengiriman</label>
		<input type="text" class="form-control" name="resi">
	</div>
	<div class="form-group">
		<label>Status</label>
		<select class="form-control" name="status">
			<option value="">Pilih Status</option>
			<option value="lunas">Lunas</option>
			<option value="barang dikirim">Barang Dikirim</option>
			<option value="batal">Batal</option>
		</select>
	</div>
	<button class="btn btn-primary" name="kirim">kirim</button>
</form>

<?php
if (isset($_POST["kirim"])) 
{
	$resi = $_POST["resi"];
	$status = $_POST["status"];
	$koneksi->query("UPDATE transaksi SET resi_pengiriman='$resi', status_pembelian='$status' WHERE id_transaksi='$id_transaksi'");

	echo "<script>alert('data pembelian terupdate')</script>";
	echo "<script>location='index.php?halaman=transaksi'</script>";
}

?>