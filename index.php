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

	<nav class="cd-nav" >
		<ul id="cd-primary-nav" class="cd-primary-nav is-fixed" style="z-index: 1200;">
			<!--<li><a href="profil.html">Profil</a></li>
                <li><a href="produk.html">Produk & Layanan</a></li>
                <li><a href="portofolio.html">Portofolio</a></li>
                <li><a href="tim.html">Tim</a></li>
                <li><a href="karir.html">Karir</a></li>
                <li><a href="partner.html">Partner</a></li>
                <li><a href="client.html">Client</a></li>-->
		</ul> <!-- primary-nav -->
	</nav> <!-- cd-nav -->
    <!-- end menu -->

    <div id="services" class="pad-section2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3 class="judul">PORTAL APLIKASI</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- content -->
    <ul class="thumbs">
        <?php
            //$session = 1;
            $sql = mysql_query("SELECT userakses.*, aplikasi.* FROM userakses INNER JOIN aplikasi ON userakses.kodeaplikasi = aplikasi.kodeaplikasi WHERE userakses.kodelogin = $_SESSION[kodelogin]");
            $date  = date("Y-m-d h:i:s");

            while ($raw = mysql_fetch_array($sql))
            {
        ?>
                <li>
                    <?php if($raw['status']=='aktif'){ ?>
                        <a href="submit.php?kodeaplikasi=<?= $raw['kodeaplikasi'] ?>" class="thumbnail" style="background-image: url('images/<?= $raw['images']; ?>')">
                            <?php
                                //mysql_query("INSERT INTO loglogin VALUES ('','$raw[kodelogin]','$raw[kodeaplikasi]','$date')");
                            ?>
                            <h4><?= $raw['namaaplikasi']; ?></h4>
                            <span class="description"><?= $raw['namaaplikasi']; ?></span>
                        </a>
                    <?php }else{ ?>
                        <a href="#" class="thumbnail" style="background-image: url('images/<?= $raw['images']; ?>')" onclick="confirm_false()">
                            <h4><?= $raw['namaaplikasi']; ?></h4>
                            <span class="description"><?= $raw['namaaplikasi']; ?></span>
                        </a>
                    <?php } ?>
                </li>
        <?php } ?>
    </ul>

    <!-- attach JavaScripts -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/main.js"></script> <!-- Resource jQuery -->
    <script type="text/javascript">
    function confirm_false()
    {
        $('#konfirm_false').modal('show');
        // document.getElementById('subact').setAttribute('href' , subact);
    }
    </script>
    <div class="modal fade" id="konfirm_false">
      <div class="modal-dialog">
        <div class="modal-content" style="margin-top:100px;">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" style="text-align:center;">Mohon Maaf Anda Tidak Diizinkan!!! </h4>
          </div>
          <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
            <!--<a href="#" class="btn btn-danger" id="subact">Hapus</a>-->
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
