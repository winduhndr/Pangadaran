<?php
include('konek.php');
if(isset($_POST['login'])){
	// $user = mysql_real_escape_string(htmlentities($_POST['username']));
	// $pass = mysql_real_escape_string(htmlentities(md5($_POST['password'])));
	$user = $_POST['username'];
	$pass = $_POST['password'];

	$query = "SELECT * FROM admin WHERE username='$user' AND password=MD5('$pass')";
	$sql = mysqli_query($koneksi, $query) or die(mysqli_error());
	if(mysqli_num_rows($sql) == 0){
		echo 'Ooops! id dan password salah';
	}else{
		$row = mysqli_fetch_assoc($sql);
		if($row['id'] == 1){
			$_SESSION['admin']=$user;
			echo '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="index.php";</script>';
		}else{
			$_SESSION['guest']=$user;
			echo '<script language="javascript">alert("Anda sebagai admin!"); document.location="guest/index.php";</script>';
		}
	}
}
?>