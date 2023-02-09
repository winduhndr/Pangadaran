<?php 
include 'konek.php'; 	
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM komentar WHERE id='$id'")or die(mysql_error());
 
header("location:index.php?pesan=hapus");
?>