<?php
ob_start();
session_start();
date_default_timezone_set("Asia/Jakarta");
//if(isset($_SESSION["level"])) header("location:index.php");
require_once ('config/koneksi.php');
if(isset($_POST["submit_login"])){
    $email = strip_tags(trim($_POST["email"]));
    $password = strip_tags(trim(md5($_POST["password"])));

   $sql_login= mysql_query("SELECT * FROM login WHERE email = '$email' AND password = '$password'");

    if(mysql_num_rows($sql_login)>0)
    {
        $row_administrator = mysql_fetch_array($sql_login);
        $_SESSION["level"]          = $row_administrator["level"];
        $_SESSION["nama"]           = $row_administrator["nama"];
        $_SESSION["kodelogin"]      = $row_administrator["kodelogin"];
        $_SESSION["kodegi"]         = $row_administrator["kodegi"];
        $_SESSION["kodeapp"]        = $row_administrator["kodeapp"];
        $_SESSION["kodeapd"]        = $row_administrator["kodeapd"];
        $_SESSION["email"]          = $row_administrator["email"];
        $_SESSION["jenisuser"]          = $row_administrator["jenisuser"];
        $date  = date("Y-m-d H:i:s");
        // mysql_query("INSERT INTO loglogin VALUES ('','$_SESSION[username]','$date','$ip')");
        header("location:index.php?dashboard");
    }else
    {
        header("location:login.php?failed");
    }
}
?>
<!DOCTYPE HTML>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PORTAL </title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/stylelogin.css" />
    <link rel="shortcut icon" href="images/icon.png">
</head>

<body>
    <div class="container">
        <div class="card card-container">
        <div class="cltop">
            <img class="top-logo img-responsive" src="images/top.png" />
        </div>

        <div class="cl-content text-center login-title">
            <img id="profile-img" class="img-responsive" src="images/logo.png" />
            <p id="profile-name" class="profile-name-card"></p>
           </div>
            <form class="form-signin" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input autocomplete="off" name="email" type="text" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                <input autocomplete="off" name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <button name="submit_login" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Masuk</button>
                <div class="cltop" >
                    <img class="bottom-logo img-responsive" src="images/bottom.png" />
                </div>
            </form><!-- /form -->



        </div><!-- /card-container close-alert -->
        <div class="col-md-3" style="margin-right: 50px;"></div>
        <div class="col-md-5 center-block">
        <?php if(isset($_GET["failed"])){?>
            <div class="alert alert-danger alert-dismissable ">
            <button aria-hidden="true" data-dismiss="alert" class="close " type="button">&times;</button>
            Password Salah
            </div>
        <?php }else if(isset($_GET["nilaiCaptchasalah"])){ ?>
            <div class="alert alert-danger alert-dismissable ">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">&times;</button>
            Capctha Salah
            </div>
        <?php }else if(isset($_GET["blokiruser"])){ ?>
            <div class="alert alert-danger alert-dismissable close-alert">
            <button aria-hidden="true" data-dismiss="alert" class="close " type="button">&times;</button>
            Mohon maaf akun anda, Kami Blokir Sementara<br />
            Harap hubungi admin jika ingin mengaktifkan kembali
            </div>
        <?php } else if(isset($_GET["login-aktif"])){ ?>
            <div class="alert alert-danger alert-dismissable close-alert">
            <button aria-hidden="true" data-dismiss="alert" class="close " type="button">&times;</button>
            Mohon maaf akun anda, Sudah Sedang Aktif
            </div>
        <?php } ?>
        </div>
    </div><!-- /container -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script>
    $(".close-alert").fadeTo(3000, 500).slideUp(2000, function(){
                $("#close-alert").alert('close');
            });
    </script>


</body>
</html>
<?php
ob_end_flush();
?>
