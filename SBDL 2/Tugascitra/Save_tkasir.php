<?php
include'koneksi.php';
$query=("INSERT INTO Tabel_kasir (Kode_Kasir, Nama_Kasir, Password_Kasir)
		VALUES
		('$_POST[Kode_Kasir]',
		'$_POST[Nama_Kasir]',
		'$_POST[Password_Kasir]')");
		$lihat = mysqli_query($koneksi, $query) or die ('Error, query failed. ' . mysqli_error());
	echo "<script>alert('Data kasir Berhasil Disimpan.');</script>";
	echo "<meta http-equiv='refresh' content='1; url=?halaman=Tabel_kasir'>";
?>