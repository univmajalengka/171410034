<?php
Include("koneksi.php");
?>
<h3 align="center"><b>Transaksi Detail Jual</b></h3>
<a href=?halaman=transaksi_tambah class="btn btn-primary btn-sm">Tambah transaksi</a><br /><br />
<div class="table-responsive">
<table class="table table-bordered table-hover">
	<tr>
		<th>No</th>
		<th>No transaksi</th>
		<th>Kode barang</th>
		<th>Jumlah barang</th>
		<th>Total harga</th>
		<th>aksi</th>
	</tr>
<?php
	$no=1;
	$query=("SELECT * FROM tabel_transaksidetailjual");
	$lihat = mysqli_query($koneksi, $query) or die ('error, query failed. ' . mysqli_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
	<tr>
		<td><?php echo"$no.";?></td>
		<td><?php echo"$r[no_transaksi]";?></td>
		<td><?php echo"$r[Kode_Barang]";?></td>
		<td><?php echo"$r[jumlah_barang]";?></td>
		<td><?php echo"$r[total_harga]";?></td>
		<td align="center">
			<a href="?halaman=Tabel_transaksi_edit&id=<?php echo"$r[no_transaksi]";?>"title="Edit Data"
			class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			<a href="?halaman=Tabel_transaksi_hapus&id=<?php echo"$r[no_transaksi]";?>"title="Hapus Data"
			class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
			
<?tr>
<?php
$no++;
} ?>
</table>
</div>
			