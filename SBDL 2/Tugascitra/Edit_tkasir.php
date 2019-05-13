<?php
include"koneksi.php";
$query=( "SELECT * FROM tabel_kasir WHERE Kode_Kasir='$_GET[id]'");
$galeri = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center"> Tabel_kasir</h3>
<form class="form-horizontal" method="post" action="?halaman=Tabel_kasir_up" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo"$m[Kode_Barang]";?>"/>
		<div class="form-group">
			<label class="col-sm-3 control-label">Kode_Kasir : </label>
			<div class="col-sm-4">
			<input type="text" name="Kode_Kasir" class="form-control" placeholder="Kode_Kasir" value="<?php echo"$m[Kode_Kasir]";?>"required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Nama_Kasir : </label>
			<div class="col-sm-4">
			<input type="text" name="Nama_Kasir" class="form-control" placeholder="Nama_Kasir" value="<?php echo"$m[Nama_Kasir]";?>"required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Password_Kasir : </label>
			<div class="col-sm-4">
			<input type="text" name="Password_Kasir" class="form-control" placeholder="Password_Kasir" value="<?php echo"$m[Password_Kasir]";?>"required>
			</div>
		</div>
		<div class="form-group">
		<label class="col-sm-3" control-label">&nbsp;</label>
		<div class="col-sm-6">
		<input type="submit" name="tambah_kasir" class="btn btn-sm btn-primary" value="Simpan">
		</div>
	</div>
</form>