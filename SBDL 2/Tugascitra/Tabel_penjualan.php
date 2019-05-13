<?php
Include("koneksi.php");
?>
<h3 align="center"><b>Penjualan</b></h3>
<a href=?halaman=penjualan_tambah class="btn btn-primary btn-sm">Tambah Penjualan</a><br /><br />
<div class="table-responsive">
<table class="table table-bordered table-hover">
	<tr>
		<th>No</th>
		<th>No penjualan</th>
		<th>Faktur</th>
		<th>Tanggal_jam</th>
		<th>Jumlah harga</th>
		<th>Kode kasir</th>
		<th>aksi</th>
	</tr>
<?php
	$no=1;
	$query=("SELECT * FROM tabel_penjualan");
	$lihat = mysqli_query($koneksi, $query) or die ('error, query failed. ' . mysqli_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
	<tr>
		<td><?php echo"$no.";?></td>
		<td><?php echo"$r[no_penjualan]";?></td>
		<td><?php echo"$r[Faktur]";?></td>
		<td><?php echo"$r[Tanggal_jam]";?></td>
		<td><?php echo"$r[Jml_Harga]";?></td>
		<td><?php echo"$r[Kode_Kasir]";?></td>
		<td align="center">
			<a href="?halaman=penjualan_edit&id=<?php echo"$r[no_penjualan]";?>"title="Edit Data"
			class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			<a href="?halaman=penjualan_hapus&id=<?php echo"$r[no_penjualan]";?>"title="Hapus Data"
			class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
			
<?tr>
<?php
$no++;
} ?>
</table>
</div>
			