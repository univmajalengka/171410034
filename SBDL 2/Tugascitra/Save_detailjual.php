<?php
include'koneksi.php';
$query=("INSERT INTO Tabel_detailjual (Faktur, Kode_Barang, Jml_Jual)
		VALUES
		('$_POST[Faktur]',
		'$_POST[Kode_Barang]',
		'$_POST[Jml_Jual]')");
		$lihat = mysqli_query($koneksi, $query) or die ('Error, query failed. ' . mysqli_error());
	echo "<script>alert('Data Detailjual Berhasil Disimpan.');</script>";
	echo "<meta http-equiv='refresh' content='1; url=?halaman=Tabel_detailjual'>";
?>