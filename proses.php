<!DOCTYPE html>
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
  color:white;
  text-shadow:1px 1px black;
}
</style>
  <br>
<center>
  <img src="Images/logo pangandaran.png" alt="logo" style="width:15%;margin:0px auto;">  
</center>
</head>
<body>
<h1><center><span style="color:white;text-shadow:1px 1px black">Informasi Destinasi Wisata di Pangandaran, Jawa Barat</span></center></h1>
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
 </body>
<div style="text-align: justify;">
<center><h1><span style="color: black; font-family: Verdana,Arial,Helvetica,Georgia; font-size: 25px;">LAPOR</span></h1></center>
	<?php
include('konek.php');
if(isset($_POST['submit'])){

 $name  = $_POST['name']; 
 $email  = $_POST['email']; 
 $phone  = $_POST['phone']; 
 $pesan = $_POST['pesan'];


 $input = mysqli_query($koneksi, "INSERT INTO komentar VALUES(NULL ,'$name', '$email', '$phone', '$pesan')") or die(mysql_error());

 if($input){

  echo '<center><b>KOMENTAR SUDAH BERHASIL DI TAMBAHKAN!</b></center> ';  //Pesan jika proses tambah sukses
  echo '<center><button><a href="lihatkomen.php">Kembali</a></button></center>'; //membuat Link untuk kembali ke halaman tambah

 }else{

  echo 'Gagal menambahkan komentar! ';  //Pesan jika proses tambah gagal
  echo '<a href="komen.php">Kembali</a>'; //membuat Link untuk kembali ke halaman tambah

 }


}

?>