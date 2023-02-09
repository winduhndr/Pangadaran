<?php error_reporting(E_ALL & ~E_NOTICE); ?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
	body {
		background-image: url("Images/background 2.jpg"); 
		background-attachment:fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-position: center;
		background-repeat: repeat;
		background-size: cover; 
		color:black;
	}
</style>
<title>Halaman Komentar</title>
</head>
<center>
	<img src="Images/logo pangandaran.png" alt="logo" style="width:15%;margin:0px auto;">  
</center>
<body>
	<h1>
		<center>
			<span style="color:white;text-shadow:1px 1px black">Informasi Destinasi Wisata di Pangandaran, Jawa Barat</span>
		</center>
	</h1>
	<nav>
		<ul>
			<li><a href="index.php">Beranda</a></li>
			<li><a href="destinasi.php">Destinasi</a></li>
			<li><a href="wiskul.php">Kuliner Khas</a></li>
			<li><a href="komen.php">Komentar</a></li>
			<li><a href="lihatkomen.php">Lihat Komentar</a></li>
			<li><a href="tentang.php">Identitas Admin</a></li>
			<li><a href="info.php">Informasi Terbaru</a></li>
		</ul>
	</nav>
<!--	//<title>Halaman Komentar</title> -->
	<h1 style="color:white;text-shadow:1px 1px 1px black;"><center>Komentar Anda </center></h1>
	<?php
		include "konek.php";
		$record = mysqli_query($koneksi, "SELECT * FROM user");
		while ($data = mysqli_fetch_array($record)){
	?>
			<div style="border:1px solid black;background:white;width:50%;margin:10px auto;padding:10px;">
				<p style="font-weight:bold;"><?= $data['name']; ?></p>
				<p><?= $data['email']; ?></p>
				<p><?= $data['phone']; ?></p>
				<p><?= $data['pesan']; ?></p>
			</div>
	<?php
		}
	?>
</body>
</html>