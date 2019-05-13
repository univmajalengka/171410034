<?php
include'koneksi.php';
$query=("UPDATE tabel_penjualan
			Faktur='$_POST[Faktur]'
			Password_Kasir='$_POST[Password_Kasir]'
			Tanggal_jam='$_POST[Tanggal_jam]'
			Jml_Harga='$_POST[Jml_Harga]'
			WHERE no_penjualan='$_POST[id]'");
			$lihat = mysqli_query ($koneksi, $query) or die ('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Mahasiswa Berhasil Diupdate.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=tabel_penjualan'>";
?>