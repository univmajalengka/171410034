<?php
include'koneksi.php';
$query=("DELETE FROM Tabel_kasir  WHERE Kode_kasir='$_GET[id]'");
			$lihat = mysqli_query($koneksi, $query) or die ('Error, query failed. ' . mysqli_error());
			echo "<script>alert (' Data Kasir Berhasil Dihapus.');</script>";
			echo "<meta http-equiv='refresh' content='1; url=?halaman=Tabel_kasir'>";
?>