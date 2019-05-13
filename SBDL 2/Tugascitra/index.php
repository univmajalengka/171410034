<!DOCTYPE html>
<html>
<head>
	<title>Penjualan dan Persediaan Barang</title>
	<link rel = "stylesheet" type="text/css" href="css/css/bootstrap.css">
	<script type = "text/javascript" scr="css/js/jquery.js"></script>
	<script type = "text/javascript" scr="css/js/bootstrap.js"></script>
</head>
<body>
	<nav class="navbar navbar-default navabar-fixed-top" role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"></a>
		</div>
		<div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="?halaman=default">Home</a></li>
				<li><a href="?halaman=Tabel_barang">Data barang</a></li>
				<li><a href="?halaman=Tabel_detailjual">Data detailjual</a></li>
				<li><a href="?halaman=Tabel_kasir">Data kasir</a></li>
				<li><a href="?halaman=Tabel_penjualan">Data penjualan</a></li>
				<li><a href="?halaman=Tabel_transaksi">Data transaksidetailjual</a></li>
		</div>
	</nav>
	<div class="container">
	<div>
		<div class="jumbotron">
			<?php
			include("halaman.php");
			?>
		</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3  align="center" class="panel-title">copyright  @ Citra Devi Nurmala</h3>
		</div>
	</div>
	</div>
	</div>
</body>
</html>