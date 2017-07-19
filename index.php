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
    <script>
    	//paste this code under head tag or in a seperate js file.
    	// Wait for window load
    	$(window).load(function() {
    		// Animate loader off screen
    		$(".se-pre-con").fadeOut(3000);;
    	});
    </script>
</head>

<body>
<!--<div class="se-pre-con"></div>
   menu -->
    <nav class="navbar navbar-fixed-top" >
    	<header class="cd-main-header">
    		<!--<a class="cd-logo" href="index.html"><img src="images/logo-tabs-solution.jpg" alt="Logo"></a>-->

    		<ul class="cd-header-buttons">
    			<li><a class="cd-nav-trigger" href="#cd-primary-nav"><span></span></a></li>
    		</ul> <!-- cd-header-buttons -->
    	</header>
    </nav>

	<main class="cd-main-content">
		<!-- your content here -->
	</main>

	<div class="cd-overlay"></div>

    <?php
        if(isset($_GET["dashboard"])){ include "dashboard.php";}
        else if (isset($_GET["submit"])){include "submit.php";}

        else{include "page/notfound.php";}
    ?>

</body>
</html>
