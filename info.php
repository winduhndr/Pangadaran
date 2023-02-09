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
  <?php
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpassword = '';
  $dbname = 'report1';
// $koneksi = @mysql_connect($dbhost,$dbuser,$dbpassword);
  $koneksi = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname); 
  $query = mysqli_query($koneksi,"SELECT * FROM tblartikel order by id_artikel Desc");
  if (mysqli_num_rows($query) == 0) {
    echo 'maaf, belum ada artikel';
  } 
  else 
  {
    while ($data = mysqli_fetch_array($query)) 
    {
      echo '<p><em>'.date('j, F Y',strtotime($data['tgl_artikel'])).'</em></p><br>';
      echo '<p><strong>'.$data['judul_artikel'].'</strong></p><br>';
      echo '<p>'.$data['isi_artikel'].'</p>';
    }
  }
  mysqli_close($koneksi);
  ?>