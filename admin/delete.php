<?php 
include 'konek.php'; 	
$id_artikel = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tblartikel WHERE id_artikel = '$id_artikel'")or die(mysql_error());

header("Location:view.php?pesan=hapus");
?>