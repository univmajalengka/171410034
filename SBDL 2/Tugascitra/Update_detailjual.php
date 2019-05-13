<?php
include'koneksi.php';
$query=("UPDATE tabel_detailjual
			Kode_Barang='$_POST[Kode_Barang]'
			Jml_Jual='$_POST[Jml_Jual]'
			WHERE Faktur='$_POST[id]'");
			$lihat = mysqli_query ($koneksi, $query) or die ('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Mahasiswa Berhasil Diupdate.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=tabel_detailjual'>";
?>