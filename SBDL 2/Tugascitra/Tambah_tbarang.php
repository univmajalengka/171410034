<h3 align="center">Tambah Tabel_Barang</h3>
<form class="form-horizontal" method="post" action="?halaman=barang_ad" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">Kode_Barang : </label>
		<div class="col-sm-4">
		<input type="text" name="Kode_Barang" class="form-control" placeholder="Masukan Kode_Barang" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Nama_Barang : </label>
		<div class="col-sm-4">
		<input type="text" name="Nama_Barang" class="form-control" placeholder="Masukan Nama_Barang" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Harga_Barang : </label>
		<div class="col-sm-4">
		<input type="text" name="Harga_Barang" class="form-control" placeholder="Masukan Harga_Barang" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Jumlah_Barang : </label>
		<div class="col-sm-4">
		<input type="text" name="Jumlah_Barang" class="form-control" placeholder="Masukan Jumlah_Barang" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
		<input type="submit" name="tambah tabel_barang" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?halaman=tabel_barang" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form>