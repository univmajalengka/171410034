<?php
Include("koneksi.php");
?>
<h3 align="center"><b>Data Kasir</b></h3>
<a href=?halaman=kasir_tambah class="btn btn-primary btn-sm">Tambah Kasir</a><br /><br />
<div class="table-responsive">
<table class="table table-bordered table-hover">
	<tr>
		<th>No</th>
		<th>Kode kasir</th>
		<th>Nama kasir</th>
		<th>Password kasir</th>
		<th>aksi</th>
	</tr>
<?php
	$no=1;
	$query=("SELECT * FROM tabel_kasir");
	$lihat = mysqli_query($koneksi, $query) or die ('error, query failed. ' . mysqli_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
	<tr>
		<td><?php echo"$no.";?></td>
		<td><?php echo"$r[Kode_Kasir]";?></td>
		<td><?php echo"$r[Nama_Kasir]";?></td>
		<td><?php echo"$r[Password_Kasir]";?></td>
		<td align="center">
			<a href="?halaman=kasir_edit&id=<?php echo"$r[Kode_Kasir]";?>"title="Edit Data"
			class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			<a href="?halaman=kasir_hapus&id=<?php echo"$r[Kode_Kasir]";?>"title="Hapus Data"
			class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
			
<?tr>
<?php
$no++;
} ?>
</table>
</div>
			