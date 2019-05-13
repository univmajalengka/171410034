<?php
include'koneksi.php';
$query=("INSERT INTO tabel_penjualan (no_penjualan, Faktur, Tanggal_jam, Jml_Harga, Kode_Kasir)
		VALUES
		('$_POST[no_penjualan]',
		'$_POST[Faktur]',
		('$_POST[Tanggal_jam]',
		('$_POST[Jml_Harga]',
		'$_POST[Kode_Kasir]')");
		$lihat = mysqli_query($koneksi, $query) or die ('Error, query failed. ' . mysqli_error());
	echo "<script>alert('Data Mahasiswa Berhasil Disimpan.');</script>";
	echo "<meta http-equiv='refresh' content='1; url=?halaman=Tabel_penjualan'>";
?>