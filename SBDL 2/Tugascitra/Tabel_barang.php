<?php
Include("koneksi.php");
?>
<h3 align="center"><b>Data Barang</b></h3>
<a align="right" href=?halaman=barang_tambah class="btn btn-primary btn-sm">Tambah Barang</a><br /><br />
<div class="table-responsive">
<table class="table table-bordered table-hover">
	<tr>
		<th>No</th>
		<th>Kode barang</th>
		<th>Nama barang</th>
		<th>harga barang</th>
		<th>jumlah barang</th>
		<th>aksi</th>
	</tr>
<?php
	$no=1;
	$query=("SELECT * FROM tabel_barang");
	$lihat = mysqli_query($koneksi, $query) or die ('error, query failed. ' . mysqli_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
	<tr>
		<td><?php echo"$no.";?></td>
		<td><?php echo"$r[Kode_Barang]";?></td>
		<td><?php echo"$r[Nama_Barang]";?></td>
		<td><?php echo"$r[Harga_Barang]";?></td>
		<td><?php echo"$r[Jumlah_Barang]";?></td>
		<td align="center">
			<a href="?halaman=barang_edit&id=<?php echo"$r[Kode_Barang]";?>"title="Edit Data"
			class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			<a href="?halaman=barang_hapus&id=<?php echo"$r[Kode_Barang]";?>"title="Hapus Data"
			class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
			
<?tr>
<?php
$no++;
} ?>
</table>
</div>
			