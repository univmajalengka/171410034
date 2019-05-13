<?php
include'koneksi.php';
$query=("UPDATE tabel_transaksidetailjual
			Kode_Barang='$_POST[Kode_Barang]'
			jumlah_barang='$_POST[jumlah_barang]'
			total_harga='$_POST[total_harga]'
			WHERE no_transaksi='$_POST[id]'");
			$lihat = mysqli_query ($koneksi, $query) or die ('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Mahasiswa Berhasil Diupdate.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=tabel_transaksidetailjual'>";
?>