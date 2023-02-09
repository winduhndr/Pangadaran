<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
body {
  background-image: url("images/background 2.jpg"); 
  background-attachment:fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-position: center;
  background-repeat: repeat;
  background-size: cover; 
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
<center><h1><span style="color: white; text-shadow:1px 1px black; font-family: Verdana,Arial,Helvetica,Georgia; font-size: 25px;">KOMENTAR</span></h1></center>
<div class="contact">
      <div class="container">
        <h3></h3>
        <div class="contact-grids">
          <div class="contact-form">
              <form method="POST" action="proses.php">
                <div class="contact-bottom-top">
                  
                    <input type="text" placeholder="Nama" name="name"></br>
                  
                  <br>
                    <input type="text" placeholder="Email" name="email"></br>
                  <br>
                  
                    <input type="text" placeholder="No.Telpon" name="phone"></br>
                  
                  <div class="clearfix"> </div>
                </div>
              
                <div class="contact-bottom-top">
                  &nbsp;&nbsp;&nbsp;<textarea style="color:white; resize:none;width:500px;height:200px;" = placeholder="Pesan" name="pesan"></textarea>           
                  </div>
                 &nbsp;&nbsp;<input type="submit" name="submit" class="btn btn-primary">
              </form>
            </div>