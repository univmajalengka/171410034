<?php
include'koneksi.php';
$query=("INSERT INTO tabel_barang (Kode_Barang, Nama_Barang, Harga_Barang, Jumlah_Barang)
		VALUES
		('$_POST[Kode_Barang]',
		'$_POST[Nama_Barang]',
		'$_POST[Harga_Barang]',
		'$_POST[Jumlah_Barang]')");
		$lihat = mysqli_query($koneksi, $query) or die ('Error, query failed. ' . mysqli_error());
	echo "<script>alert('Data Barang Berhasil Disimpan.');</script>";
	echo "<meta http-equiv='refresh' content='1; url=?halaman=Tabel_barang'>";
?>