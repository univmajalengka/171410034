<?php
include"koneksi.php";
$query=( "SELECT * FROM tabel_barang WHERE Kode_Barang='$_GET[id]'");
$galeri = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center"> Edit Tabel_barang</h3>
<form class="form-horizontal" method="post" action="?halaman=Tabel_barang_up" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo"$m[Kode_Barang]";?>"/>
		<div class="form-group">
			<label class="col-sm-3 control-label">Kode_Barang : </label>
			<div class="col-sm-4">
			<input type="text" name="Kode_Barang" class="form-control" placeholder="Kode_Barang" value="<?php echo"$m[Kode_Barang]";?>"required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Nama_Barang : </label>
			<div class="col-sm-4">
			<input type="text" name="Nama_Barang" class="form-control" placeholder="Nama_Barang" value="<?php echo"$m[Nama_Barang]";?>"required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Harga_Barang : </label>
			<div class="col-sm-4">
			<input type="text" name="Harga_Barang" class="form-control" placeholder="Harga_Barang" value="<?php echo"$m[Harga_Barang]";?>"required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Jumlah_Barang : </label>
			<div class="col-sm-4">
			<input type="text" name="Jumlah_Barang" class="form-control" placeholder="Jumlah_Barang" value="<?php echo"$m[Jumlah_Barang]";?>"required>
			</div>
		</div>
		<div class="form-group">
		<label class="col-sm-3" control-label">&nbsp;</label>
		<div class="col-sm-6">
		<input type="submit" name="tambah_barang" class="btn btn-sm btn-primary" value="Simpan">
		</div>
	</div>
</form>