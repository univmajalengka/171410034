<h3 align="center">Transaksi Detail Jual</h3>
<form class="form-horizontal" method="post" action="?halaman=Tabel_transaksi_ad" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">no_transaksi : </label>
		<div class="col-sm-4">
		<input type="text" name="no_transaksi" class="form-control" placeholder="Masukan no_transaksi" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Kode_Barang : </label>
		<div class="col-sm-4">
		<input type="text" name="Kode_Barang" class="form-control" placeholder="Masukan Kode_Barang" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">jumlah_barang : </label>
		<div class="col-sm-4">
		<input type="text" name="jumlah_barang" class="form-control" placeholder="Masukan jumlah_barang" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">total_harga : </label>
		<div class="col-sm-4">
		<input type="text" name="total_harga" class="form-control" placeholder="Masukan total_harga" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
		<input type="submit" name="Tabel_transaksi" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?halaman=Tabel_transaksi" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form>