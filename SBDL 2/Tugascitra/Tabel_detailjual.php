<?php
Include("koneksi.php");
?>
<h3 align="center"><b>Data Detail Jual</b></h3>
<a href=?halaman=detailjual_tambah class="btn btn-primary btn-sm">Tambah Detail Jual</a><br /><br />
<div class="table-responsive">
<table class="table table-bordered table-hover">
	<tr>
		<th>No</th>
		<th>Faktur</th>
		<th>Kode barang</th>
		<th>Jumlah jual</th>
		<th>aksi</th>
	</tr>
<?php
	$no=1;
	$query=("SELECT * FROM tabel_detailjual");
	$lihat = mysqli_query($koneksi, $query) or die ('error, query failed. ' . mysqli_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
	<tr>
		<td><?php echo"$no.";?></td>
		<td><?php echo"$r[Faktur]";?></td>
		<td><?php echo"$r[Kode_Barang]";?></td>
		<td><?php echo"$r[Jml_Jual]";?></td>
		<td align="center">
			<a href="?halaman=detailjual_edit&id=<?php echo"$r[Faktur]";?>"title="Edit Data"
			class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			<a href="?halaman=detailjual_hapus&id=<?php echo"$r[Faktur]";?>"title="Hapus Data"
			class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
			
<?tr>
<?php
$no++;
} ?>
</table>
</div>
			