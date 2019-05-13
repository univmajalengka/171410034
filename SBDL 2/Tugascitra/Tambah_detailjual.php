<h3 align="center">Tambah Data_Detail Jual</h3>
<form class="form-horizontal" method="post" action="?halaman=detailjual_ad" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">Faktur : </label>
		<div class="col-sm-4">
		<input type="text" name="Faktur" class="form-control" placeholder="Masukan Faktur" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Kode_Barang : </label>
		<div class="col-sm-4">
		<input type="text" name="Kode_Barang" class="form-control" placeholder="Masukan Kode_Barang" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Jml_Jual : </label>
		<div class="col-sm-4">
		<input type="text" name="Jml_Jual" class="form-control" placeholder="Masukan Jml_Jual" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
		<input type="submit" name="tambah_detailjual" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?halaman=detailjual" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form>