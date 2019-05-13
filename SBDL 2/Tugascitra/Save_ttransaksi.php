<?php
include'koneksi.php';
$query=("INSERT INTO tabel_transaksidetailjual (no_transaksi, Kode_Barang, jumlah_barang, total_harga)
		VALUES
		('$_POST[no_transaksi]',
		'$_POST[Kode_Barang]',
		('$_POST[jumlah_barang]',
		'$_POST[total_harga]')");
		$lihat = mysqli_query($koneksi, $query) or die ('Error, query failed. ' . mysqli_error());
	echo "<script>alert('Data Transaksi Detail Jual Berhasil Disimpan.');</script>";
	echo "<meta http-equiv='refresh' content='1; url=?halaman=Tabel_transaksi'>";
?>