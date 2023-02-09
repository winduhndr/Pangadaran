<?php
$host1 = "localhost";
$username1 = "root";
$password1 = "";
$database1 = "report1";

$koneksi1 = @mysql_connect($host1, $username1, $password1);
$pilihdatabase1 = mysql_select_db($database1, $koneksi1);

if($pilihdatabase1){
    echo " ";
}

else {
    echo "koneksi gagal ";
}
 ?>
