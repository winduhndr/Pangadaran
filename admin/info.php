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
                     <h2>Masukkan Informasi</h2>   
                        <h5>Selamat Datang, Windu Handaru </h5>
                    </div>
                </div>              
                 <table border="2">

            
		     </div>
	
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</body>
</html>
<form method="post" name="posting_form" action="submit.php">
Judul Artikel<br>
<input type="text" name="judul_artikel" size="30"><br>
Isi Artikel<br>
<textarea name="isi_artikel" cols="60" rows="10"></textarea><br>
<input type="submit" name="submit" value="submit artikel">
</form>