<?php
include'koneksi.php';
$query=("DELETE FROM tabel_transaksidetailjual  WHERE no_transaksi='$_GET[id]'");
			$lihat = mysqli_query($koneksi, $query) or die ('Error, query failed. ' . mysqli_error());
			echo "<script>alert (' Data Tabel Barang Berhasil Dihapus.');</script>";
			echo "<meta http-equiv='refresh' content='1; url=?halaman=Tabel_transaksidetailjual'>";
?>