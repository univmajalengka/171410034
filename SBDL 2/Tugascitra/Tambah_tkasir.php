<h3 align="center">Tambah Tabel_Kasir</h3>
<form class="form-horizontal" method="post" action="?halaman=Tabel_kasir_ad" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">Kode_Kasir : </label>
		<div class="col-sm-4">
		<input type="text" name="Kode_Kasir" class="form-control" placeholder="Masukan Kode_Kasir" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Nama_Kasir : </label>
		<div class="col-sm-4">
		<input type="text" name="Nama_Kasir" class="form-control" placeholder="Masukan Nama_Kasir" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Password_Kasir : </label>
		<div class="col-sm-4">
		<input type="text" name="Password_Kasir" class="form-control" placeholder="Masukan Password_Kasir" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
		<input type="submit" name="Tambah_kasir" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?halaman=Tabel_kasir" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form>