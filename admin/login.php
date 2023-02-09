<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
  body  {

    background-image: url("admin.jpg");
    background-attachment:fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-position: center;
    background-repeat: repeat;
    background-size: cover; 

  }
</style>
<title>Masuk ke halaman admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


  <div class="container">
    <div class="row text-center ">
      <div class="col-md-12">
        <br /><br />
        <h5><b><span style="color:white;">Masuk sebagai admin</span></b></h5>
        <br />
      </div>
    </div>
    <div class="row ">

      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <strong><center>  LOGIN </center></strong>  
          </div>
          <br>
          <center><img src="windu2.jpeg" alt="pangandaran" width="150" height="250"></center>
          <div class="panel-body">
            <form action="masuk.php" method="post">
              <table align="center" width="100%">
                <tr>
                  <td>Id</td>
                  <td>:</td>
                  <td><input type="text" name="username" placeholder="Id" required style="width:100%;" /></td>
                </tr>
                <tr>
                  <td>Password</td>
                  <td>:</td>
                  <td><input type="password" name="password" placeholder="Password" style="width:100%;" required /></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><input class="btn btn-success" type="submit" name="login" value="Masuk" style="float:right" /></td>
                </tr>
                <tr>
                  <td colspan="3"><a href="/pangandaran/index.php"class="btn btn-primary ">Kembali</td>
                  </tr>
                </table>
              </form>

            </form>

          </div>

        </div>
      </div>


    </div>
  </div>


  <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
  <!-- JQUERY SCRIPTS -->
  <script src="assets/js/jquery-1.10.2.js"></script>
  <!-- BOOTSTRAP SCRIPTS -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- METISMENU SCRIPTS -->
  <script src="assets/js/jquery.metisMenu.js"></script>
  <!-- CUSTOM SCRIPTS -->
  <script src="assets/js/custom.js"></script>

</body>
</html>
