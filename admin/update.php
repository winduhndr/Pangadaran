<?php
$dbhost ="localhost";
$dbuser ="root";
$dbpassword ="";
$dbname ="report1";
$koneksi = @mysql_connect($dbhost,$dbuser,$dbpassword);
mysql_select_db($dbname,$koneksi);
$id = $_GET['id_artikel'];
$judul = $_POST['judul_artikel'];
$isi = $_POST['isi_artikel'];
$query = ("UPDATE tblartikel SET (judul_artikel='judul', isi_artikel='isi' WHERE id_artikel='$id') ");
if ($query) 	
{

	echo 'berhasil membuat artikel dengan judul '.$judul ;
}
else
{
echo 'gagal membuat artikel dengan judul '.$judul ;
mysql_close();
}
?>
<br>