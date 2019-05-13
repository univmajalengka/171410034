<?php
include'koneksi.php';
$query=("UPDATE tabel_kasir
			Nama_Kasir='$_POST[Nama_Kasir]'
			Password_Kasir='$_POST[Password_Kasir]'
			WHERE Kode_Kasir='$_POST[id]'");
			$lihat = mysqli_query ($koneksi, $query) or die ('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Mahasiswa Berhasil Diupdate.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=tabel_kasir'>";
?>