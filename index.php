<?php
    ob_start();
    session_start();
    date_default_timezone_set("Asia/Jakarta");
    require_once ('config/koneksi.php');
?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Script Tutorials" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Portal Aplikasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- attach CSS styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-2.1.1.js"></script>
    <link href="css/style.css" rel="stylesheet" />
    <!-- menu -->
    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style_menu.css"> <!-- Resource style -->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->
    <!-- attach JavaScripts -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/main.js"></script>


    <link rel="stylesheet" href="css/portfolio.jquery.css">
    <script src="js/portfolio.jquery.js"></script>
    <script>
        $(document).ready(function() {
            $('.thumbs').portfolio({
                cols: 3,
                transition: 'slideDown'
            });
        });
    </script>
    <style>
        h1 {
            margin-bottom: 0px;
            margin-top: 30px;
        }
        p {
            line-height: 25px;
        }
        .thumbs {
            display: block;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-fixed-top" >
    	<header class="cd-main-header">
    		<ul class="cd-header-buttons">
    			<li><a class="cd-nav-trigger" href="#cd-primary-nav"><span></span></a></li>
    		</ul> <!-- cd-header-buttons -->
    	</header>
    </nav>

    <nav class="cd-nav" >
		<ul id="cd-primary-nav" class="cd-primary-nav is-fixed" style="z-index: 1200;">
            <li class="dropdown">
               <a  title="Panel Pengaturan Akun" class="dropdown-toggle" data-toggle="dropdown" href="#">
                   <strong style="padding: 2px 0;"><?php echo $_SESSION["nama"];?></strong> &nbsp; <i class="fa fa-caret-down"></i>
               </a>
               <ul class="dropdown-menu dropdown-user">
                   <li>
                       <a href="index.php?password"><i class="fa fa-cogs"></i> Ganti Password</a>
                   </li>
                   <li>
                       <a href="#" class="logoutK"><i class="fa fa-power-off"></i> Log out</a>
                   </li>
               </ul>
               <!-- /.dropdown-user -->
           </li>
		</ul> <!-- primary-nav -->
	</nav> <!-- cd-nav -->
    <!-- end menu -->

    <?php
        if(isset($_GET["dashboard"])){ include "dashboard.php";}
        else if (isset($_GET["submit"])){include "submit.php";}
        else if (isset($_GET["password"])){include "gantipassword.php";}

        else { include "notfound.php"; }
    ?>

</body>
</html>
