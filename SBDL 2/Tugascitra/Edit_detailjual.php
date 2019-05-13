<?php
include"koneksi.php";
$query=( "SELECT * FROM tabel_detailjual WHERE Faktur='$_GET[id]'");
$galeri = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center"> Tabel_detailjual</h3>
<form class="form-horizontal" method="post" action="?halaman=Tabel_detailjual_up" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo"$m[Kode_Barang]";?>"/>
		<div class="form-group">
			<label class="col-sm-3 control-label">Faktur : </label>
			<div class="col-sm-4">
			<input type="text" name="Faktur" class="form-control" placeholder="Faktur" value="<?php echo"$m[Faktur]";?>"required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Kode_Barang : </label>
			<div class="col-sm-4">
			<input type="text" name="Kode_Barang" class="form-control" placeholder="Kode_Barang" value="<?php echo"$m[Kode_Barang]";?>"required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Jml_Jual : </label>
			<div class="col-sm-4">
			<input type="text" name="Jml_Jual" class="form-control" placeholder="Jml_Jual" value="<?php echo"$m[Jml_Jual]";?>"required>
			</div>
		</div>
		<div class="form-group">
		<label class="col-sm-3" control-label">&nbsp;</label>
		<div class="col-sm-6">
		<input type="submit" name="tambah_detailjual" class="btn btn-sm btn-primary" value="Simpan">
		</div>
	</div>
</form>