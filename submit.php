<?php
$dbhost ="localhost";
$dbuser ="root";
$dbpassword ="";
$dbname ="report1";
$koneksi = @mysql_connect($dbhost,$dbuser,$dbpassword);
mysql_select_db($dbname,$koneksi);
$judul = $_POST['judul_artikel'];
$isi = $_POST['isi_artikel'];
$tgl = date('Y-m-d');
$query = mysql_query("INSERT INTO tblartikel VALUES ('','$judul','$isi','$tgl')");
if ($query) {
echo 'berhasil membuat artikel dengan judul '.$judul ;
}
else
{
echo 'gagal membuat artikel dengan judul '.$judul ;
echo '<a href="cuaca.php">'Lihat Hasil Postings '</a>'
mysql_close();
}
?>


