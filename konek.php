<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "report1";

	$koneksi = mysqli_connect($host, $username, $password, $database);

	//$pilihdatabase = mysql_select_db($database, $koneksi);

	if($koneksi){
		echo " ";
	}else{
		echo "koneksi gagal ";
	}
?>