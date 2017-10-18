<?php
    ob_start();
	session_start();

    date_default_timezone_set("Asia/Jakarta");
    // if( ! isset($_SESSION["level"])) header("location:login.php");
	include    "page/beranda/headadmin.php";
    include     "config/koneksi.php";
    include     "config/utility.php";

    //anti caching
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");

    //xss protect
    header("X-XSS-Protection: 1; mode=block");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php echo headadmin(); ?>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="images/icon.png">
</head>
<body>
<script type="text/javascript" >
$(document).ready(function()
{
$("#notificationLink").click(function()
{
$("#notificationContainer").fadeToggle(300);
$("#notification_count").fadeOut("slow");
return false;
});

//Document Click
$(document).click(function()
{
$("#notificationContainer").hide();
});
//Popup Click
$("#notificationContainer").click(function()
{
return false
});

});

$( "" ).click(function( eventObject ) {
    var elem = $( this );
    if ( elem.attr( "href" ).match( /evil/ ) ) {
        eventObject.preventDefault();
        elem.addClass( "evil" );
    }
});

</script>

 <!-- <script src="assets/js/jquery-1.11.0.min.js"></script> -->
<!-- <script src="assets/js/jquery-ui.js"></script> -->
<!-- <script src="assets/js/script.js"></script> -->
<div class="main">
  <header class="header-main">
  <br /><br />
    <nav class="navbar navbar-default navbar-cls-top navbar-fixed-top" role="navigation" style="margin-bottom: 0">

    <div class="page-wrapper">
            <div class="navbar-header">
                <button class="button-nav-toggle navbar-toggle"  >
                <span class="icon">&#9776;</span> Menu</button>
                <a href="index.php?dashboard">
                   <img class="img-responsive" src="images/tsa.png" />
                </a>
            </div>

       <!--
        <div style="color: white; padding: 12px 11px 5px; float: right;font-size: 16px;">
        <strong style="padding: 2px 0;"><?php echo $_SESSION["nama_lengkap"];?></strong> &nbsp;
        <a href="#" class="btn btn-danger square-btn-adjust logoutK"><i class="fa fa-power-off"></i></a>
        <button class="button-nav-toggle hdbtn"><span class="icon">&#9776;</span></button>
        </div>
     -->

     <ul class="nav navbar-top-links navbar-right">

             <li class="dropdown">
                    <a  title="Panel Pengaturan Akun" class="dropdown-toggle putih" href="#">
                        <strong style="padding: 2px 0;">Superadmin</strong>
                    </a>
                    <!-- /.dropdown-user -->
                </li>
                <!-- <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="alertsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-bell"></i>
                            <span class="d-lg-none">Alerts
                                <span class="badge badge-pill badge-warning">6 New</span>
                            </span>
                            <span class="new-indicator text-warning d-none d-lg-block">
                                <i class="fa fa-fw fa-circle"></i>
                                <span class="number">6</span>
                            </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">New Alerts:</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <span class="text-success">
                                    <strong>
                                        <i class="fa fa-long-arrow-up"></i>
                                        Status Update
                                    </strong>
                                </span>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <span class="text-danger">
                                    <strong>
                                        <i class="fa fa-long-arrow-down"></i>
                                        Status Update
                                    </strong>
                                </span>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <span class="text-success">
                                    <strong>
                                        <i class="fa fa-long-arrow-up"></i>
                                        Status Update
                                    </strong>
                                </span>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item small" href="#">
                                View all alerts
                            </a>
                        </div>
                    </li>
                </ul> -->
             <li class="dropdown">
                <button title="Tombol Menu" class="button-nav-toggle hdbtn" style="float: none;"><span class="icon">&#9776;</span></button>
             </li>
     </ul>


 </div>
 </nav>

  </header>

    <div id="wrapper">
        <!-- /. NAV SIDE  -->
         <!-- /. Content Page  -->
        <?php
            if(isset($_GET["dashboard"])){ include "page/dashboard/index.php";}

            else if (isset($_GET["apd"])){include "page/apd/index.php";}
            else if (isset($_GET["tambah-apd"])){include "page/apd/tambah.php";}
            else if (isset($_GET["update-apd"])){include "page/apd/update.php";}
            else if (isset($_GET["laporan-apd"])){include "page/apd/laporan.php";}

            else if (isset($_GET["app"])){include "page/app/index.php";}
            else if (isset($_GET["tambah-app"])){include "page/app/tambah.php";}
            else if (isset($_GET["update-app"])){include "page/app/update.php";}
            else if (isset($_GET["laporan-app"])){include "page/app/laporan.php";}

            else if (isset($_GET["gi"])){include "page/gi/index.php";}
            else if (isset($_GET["tambah-gi"])){include "page/gi/tambah.php";}
            else if (isset($_GET["update-gi"])){include "page/gi/update.php";}
            else if (isset($_GET["laporan-gi"])){include "page/gi/laporan.php";}

            else if (isset($_GET["bidang"])){include "page/bidang/index.php";}
            else if (isset($_GET["tambah-bidang"])){include "page/bidang/tambah.php";}
            else if (isset($_GET["update-bidang"])){include "page/bidang/update.php";}
            else if (isset($_GET["laporan-bidang"])){include "page/bidang/laporan.php";}

            else if (isset($_GET["aplikasi"])){include "page/aplikasi/index.php";}
            else if (isset($_GET["tambah-aplikasi"])){include "page/aplikasi/tambah.php";}
            else if (isset($_GET["update-aplikasi"])){include "page/aplikasi/update.php";}
            else if (isset($_GET["laporan-aplikasi"])){include "page/aplikasi/laporan.php";}

            else if (isset($_GET["user"])){include "page/user/index.php";}
            else if (isset($_GET["tambah-user"])){include "page/user/tambah.php";}
            else if (isset($_GET["update-user"])){include "page/user/update.php";}
            else if (isset($_GET["laporan-user"])){include "page/user/laporan.php";}
            else if (isset($_GET["user-akses"])){include "page/user/akses.php";}

            else if (isset($_GET["loglogin"])){include "page/loglogin/data.php";}


            else if (isset($_GET["password"])){include "page/changepassnew.php";}

            else{include "page/notfound.php";}


        ?>
          <?php /* PAGE WRAPPER */ ?>
    </div>
     <!-- /. WRAPPER  -->
  <!-- menu -->
        <div class="menu">
          <nav class="nav-main">
            <div class="nav-container">

                <?php
                include "page/menu/menu_utama.php";
                ?>

            </div>
          </nav>
        </div>
</div>
 <script>

$("#notif1").click(function(event){
    event.preventDefault(); console.log(event.target.nodeName);
    $.ajax({ type: 'POST', url: 'pinjaman=lunas', data: {id:0, module:'Module',source:'Source'}, complete: function(data){
        console.log("DONE"); window.location = "index.php?pinjaman&Status=lunas" } }); });
$("#notif2").click(function(event){
    event.preventDefault(); console.log(event.target.nodeName);
    $.ajax({ type: 'POST', url: 'angsuranterakhir', data: {id:0, module:'Module',source:'Source'}, complete: function(data){
        console.log("DONE"); window.location = "index.php?tigablnterakhir" } }); });
$("#notif3").click(function(event){
    event.preventDefault(); console.log(event.target.nodeName);
    $.ajax({ type: 'POST', url: 'simpananwajib=lunas', data: {id:0, module:'Module',source:'Source'}, complete: function(data){
        console.log("DONE"); window.location = "index.php?SetoranManual&simpanawajib=lunas" } }); });

 </script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- konfirmasi -->
    <script src="assets/js/custom.js"></script>
    <!-- confirm -->

    <script src="assets/confirmdell/jquery.confirm/jquery.confirm.js"></script>
    <script src="assets/confirmdell/js/script2.js"></script>



</body>
</html>
<?php ob_end_flush(); ?>
