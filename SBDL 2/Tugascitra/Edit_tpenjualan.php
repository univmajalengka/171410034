<?php
include"koneksi.php";
$query=( "SELECT * FROM tabel_penjualan WHERE no_Penjualan='$_GET[id]'");
$galeri = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center"> Tabel_penjualan</h3>
<form class="form-horizontal" method="post" action="?halaman=Tabel_penjualan_up" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo"$m[Kode_Barang]";?>"/>
		<div class="form-group">
			<label class="col-sm-3 control-label">no_penjualan : </label>
			<div class="col-sm-4">
			<input type="text" name="no_penjualan" class="form-control" placeholder="no_penjualan" value="<?php echo"$m[no_penjualan]";?>"required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Faktur : </label>
			<div class="col-sm-4">
			<input type="text" name="Faktur" class="form-control" placeholder="Faktur" value="<?php echo"$m[Faktur]";?>"required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Tanggal_jam : </label>
			<div class="col-sm-4">
			<input type="text" name="Tanggal_jam" class="form-control" placeholder="Tanggal_jam" value="<?php echo"$m[Tanggal_jam]";?>"required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Jml_Harga : </label>
			<div class="col-sm-4">
			<input type="text" name="Jml_Harga" class="form-control" placeholder="Jml_Harga" value="<?php echo"$m[Jml_Harga]";?>"required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Kode_Kasir : </label>
			<div class="col-sm-4">
			<input type="text" name="Kode_Kasir" class="form-control" placeholder="Kode_Kasir" value="<?php echo"$m[Kode_Kasir]";?>"required>
			</div>
		</div>
		<div class="form-group">
		<label class="col-sm-3" control-label">&nbsp;</label>
		<div class="col-sm-6">
		<input type="submit" name="tambah_penjualan" class="btn btn-sm btn-primary" value="Simpan">
		</div>
	</div>
</form>