<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8" />
    <title>Admin Control</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="nav" style="margin-bottom:0px;padding:0px;width:100%;text-align:center;">
            <a class="navbar-brand active-menu" href="index.php" style="color:white;width:19.3%;">
                Admin Control
            </a> 
        </nav>  
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li style="width:100%">
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard fa-3x"></i>Admin Control</a>
                    </li>
                    <li style="width:100%">
                        <a class="active-menu" href="info.php"><i class="fa fa-dashboard fa-3x"></i>Tambah Informasi</a>
                    </li>
                    <li style="width:100%">
                        <a class="active-menu" href="view.php"><i class = "fa fa-dashboard fa-3x"></i>Melihat Informasi</a>
                    </li>
                    <li style="width:100%">
                        <a class="active-menu"href="login.php"><i class= "fa fa-sign-out fa-3x"></i>Keluar</a>
                    </li>
                </ul>
            </div>
        </nav> 
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Melihat Informasi Terbaru</h2>   
                        <h5>Selamat Datang, Windu Handaru </h5>
                    </div>
                </div>              
                 <table border="2">

<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'report1';
$koneksi = @mysqli_connect($dbhost,$dbuser,$dbpassword, $dbname);
$query = mysqli_query($koneksi, "SELECT * FROM tblartikel order by id_artikel Desc");
if (mysqli_num_rows($query) == 0) {
echo 'maaf, belum ada artikel';
} 
else 
{
while ($data = mysqli_fetch_array($query)) 
{
echo '<p><strong>'.$data['judul_artikel'].'</strong></p>';
echo '<p><em>'.date('j, F Y',strtotime($data['tgl_artikel'])).'</em></p>';
echo '<p>'.$data['isi_artikel'].'</p>';
echo '<td><a class="hapus" href="delete.php?id='.$data['id_artikel'].'">Hapus Berita</a></td>';
}
}
mysqli_close($koneksi);
?>

