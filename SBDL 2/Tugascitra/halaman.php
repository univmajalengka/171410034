<?php
$halaman=(isset($_GET['halaman'])) ?$_GET['halaman']:"default";
switch($halaman){
	case'Tabel_barang':include"Tabel_barang.php";break;
	case'barang_edit':include"Edit_tbarang.php";break;
	case'barang_hapus':include"delete_tbarang.php";break;
	case'barang_ad':include"Save_tbarang.php";break;
	case'barang_tambah':include"Tambah_tbarang.php";break;
	case'barang_up':include"Update_tbarang.php";break;
	
	case'Tabel_detailjual':include"Tabel_detailjual.php";break;
	case'detailjual_edit':include"Edit_detailjual.php";break;
	case'detailjual_hapus':include"Delete_detailjual.php";break;
	case'detailjual_tambah':include"Tambah_detailjual.php";break;
	case'detailjual_ad':include"Save_detailjual.php";break;
	case'detailjual_up':include"Update_detailjual.php";break;
	
	case'Tabel_kasir':include"Tabel_kasir.php";break;
	case'kasir_edit':include"Edit_tkasir.php";break;
	case'kasir_hapus':include"Delete_tkasir.php";break;
	case'kasir_tambah':include"Tambah_tkasir.php";break;
	case'kasir_ad':include"Save_tkasir.php";break;
	case'kasir_update':include"Update_tkasir.php";break;
	case'kasir_delete':include"Delete_tkasir.php";break;
	
	case'Tabel_penjualan':include"Tabel_penjualan.php";break;
	case'penjualan_edit':include"Edit_tpenjualan.php";break;
	case'penjualan_hapus':include"Hapus_tpenjualan.php";break;
	case'penjualan_tambah':include"Tambah_tpenjualan.php";break;
	case'penjualan_ad':include"Save_tpenjualan.php";break;
	case'penjualan_update':include"Update_tpenjualan.php";break;
	
	case'Tabel_transaksi':include"Tabel_transaksidetailjual.php";break;
	case'transaksi_edit':include"Edit_ttransaksi.php";break;
	case'transaksi_hapus':include"Hapus_ttransaksi.php";break;
	case'transaksi_tambah':include"Tambah_ttransaksi.php";break;
	case'transaksi_ad':include"Save_ttransaksi.php";break;
	case'transaksi_update':include"Update_ttransaksi.php";break;
	case'default':include"home.php";break;
}
?>