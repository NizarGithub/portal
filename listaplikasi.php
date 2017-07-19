<?php
    ob_start();
    session_start();
    require_once ('config/koneksi.php');
    $sql = mysql_query("SELECT * FROM userakses WHERE kodelogin='$_SESSION[kodelogin]'") or die (mysql_error());
?>
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portal Aplikasi</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- Notif -->
    <link href="assets/css/notif.css" rel="stylesheet" />
</head>

    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail">
          <img src="images/user.jpg" alt="...">
          <div class="caption">
            <h3>Site 1</h3>
            <p><a href="#" class="btn btn-primary" role="button">Masuk</a></p>
          </div>
        </div>
        <div class="thumbnail">
          <img src="images/user.jpg" alt="...">
          <div class="caption">
            <h3>Site 2</h3>
            <p><a href="#" class="btn btn-primary" role="button">Masuk</a></p>
          </div>
        </div>
        <div class="thumbnail">
          <img src="images/user.jpg" alt="...">
          <div class="caption">
            <h3>Site 3</h3>
            <p><a href="#" class="btn btn-primary" role="button">Masuk</a></p>
          </div>
        </div>
      </div>
  </div>

  <?php
  /*while ($row=mysql_fetch_array($sql)) {
      echo $row['status'];
      echo $row['kodeaplikasi'];
  }
  ?>**/
