<?php
include'koneksi.php';
$query=("UPDATE Tabel_barang
			SET
			Nama_barang='$_POST[Nama_barang]',
			harga_barang='$_POST[harga_barang]'
			jumlah_barang='$_POST[jumlah_barang]'
			WHERE Kode_barang='$_POST[id]'");
			$lihat = mysqli_query ($koneksi, $query) or die ('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Barang Berhasil Diupdate.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=Tabel_barang'>";
?>