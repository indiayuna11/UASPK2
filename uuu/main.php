<?php
error_reporting(0);
session_start();
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into barangku set  
nama_pelanggan = '$_POST[nama_pelanggan]',
nama_barang = '$_POST[nama_barang]',
jumlah_barang = '$_POST[jumlah_barang]'");

$berhasil="<p style='color:red;'>Pemesanan Diproses</p>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sindi Ayuna Hustani</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
	<!-- header -->
	<header>
		<div class="navbar"></div>
		<div class="container">
		<h1><a href="index.php"></a>SUNNYCRAFTIE</h1>
		<ul>
			<li class="active"><a href="index.php">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
			<li><a href="product.html">PRODUCT</a></li>
			<li><a href="order.php">ORDER</a></li>
			<li><a href="contact.html">CONTACT</a></li>
		</ul>
		</div>
	</header>

	<!-- banner -->
	<section class="banner">
		<h2 id="home">WELCOME TO MY WEBSITE</h2>
	</section>

	<!-- footer -->
	<footer>
		<div class="container">
			<small> Copyright &copy; 2021 - Sindi Ayuna Hustani, All Rights Reserved.</small>
		</div>
	</footer>

	<!--Javascript-->
    <script src="order.js"></script>
</body>
</html>