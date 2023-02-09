<?php


//membuat koneksi kedatabase

$dbhost ="localhost";
$dbuser ="root";
$dbpassword ="";
$dbname ="report1";
$koneksi = mysqli_connect($dbhost, $dbuser,$dbpassword, $dbname);
// mysql_select_db($dbname,$koneksi);


//membuat variabel dari inputan form

$judul = $_POST['judul_artikel'];
$isi = $_POST['isi_artikel'];
$tgl = date('Y-m-d');

//proses query memasukkan data ke database

$sql = "INSERT INTO tblartikel VALUES ('','$judul','$isi','$tgl')";
$query = mysqli_query($koneksi, $sql);

//cek apakah querynya berhasil atau tidak

if ($query) {


//jika berhasil maka tampilkan pesan

echo 'berhasil membuat artikel dengan judul '.$judul ;
}
else
{

//tampilkan pesan error jika query tidak berhasil

echo 'gagal membuat artikel dengan judul '.$judul ;


//tutup koneksi ke database

mysqli_close($koneksi);
}
?>

<a href="view.php">Lihat Hasil Posting</a>
<br>.