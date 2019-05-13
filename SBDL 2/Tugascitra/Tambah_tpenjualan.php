<h3 align="center">Tambah Tabel_Penjualan</h3>
<form class="form-horizontal" method="post" action="?halaman=Tabel_penjualan_ad" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">no_penjualan : </label>
		<div class="col-sm-4">
		<input type="text" name="no_penjualan" class="form-control" placeholder="Masukan no_penjualan" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Faktur : </label>
		<div class="col-sm-4">
		<input type="text" name="Faktur" class="form-control" placeholder="Masukan Faktur" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Tanggal_jam : </label>
		<div class="col-sm-4">
		<input type="text" name="Tanggal_jam" class="form-control" placeholder="Masukan Tanggal_jam" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Jml_Harga : </label>
		<div class="col-sm-4">
		<input type="text" name="Jml_Harga" class="form-control" placeholder="Masukan Jml_Harga" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Kode_Kasir : </label>
		<div class="col-sm-4">
		<input type="text" name="Kode_Kasir" class="form-control" placeholder="Masukan Kode_Kasir" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
		<input type="submit" name="Tabel_penjualan" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?halaman=Tabel_penjualan" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form>