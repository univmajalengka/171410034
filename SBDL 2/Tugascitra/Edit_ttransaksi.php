<?php
include"koneksi.php";
$query=( "SELECT * FROM Tabel_transaksi WHERE no_transaksi='$_GET[id]'");
$galeri = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center"> Tabel_Transaksidetailjual</h3>
<form class="form-horizontal" method="post" action="?halaman=Tabel_transaksi_up" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo"$m[Kode_Barang]";?>"/>
		<div class="form-group">
			<label class="col-sm-3 control-label">no_transaksi : </label>
			<div class="col-sm-4">
			<input type="text" name="no_transaksi" class="form-control" placeholder="no_transaksi" value="<?php echo"$m[no_transaksi]";?>"required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Kode_Barang : </label>
			<div class="col-sm-4">
			<input type="text" name="Kode_Barang" class="form-control" placeholder="Kode_Barang" value="<?php echo"$m[Kode_Barang]";?>"required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">jumlah_barang : </label>
			<div class="col-sm-4">
			<input type="text" name="jumlah_barang" class="form-control" placeholder="jumlah_barang" value="<?php echo"$m[jumlah_barang]";?>"required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">total_harga : </label>
			<div class="col-sm-4">
			<input type="text" name="total_harga" class="form-control" placeholder="total_harga" value="<?php echo"$m[total_harga]";?>"required>
			</div>
		</div>
		<div class="form-group">
		<label class="col-sm-3" control-label">&nbsp;</label>
		<div class="col-sm-6">
		<input type="submit" name="Tabel_transaksi" class="btn btn-sm btn-primary" value="Simpan">
		</div>
	</div>
</form>