<?php
ob_start();
session_start();
date_default_timezone_set("Asia/Jakarta");
include "../config/koneksi.php";

//if( ! isset($_SESSION["level"])) header("location:login.php?noakses");

if(isset($_GET["delete-apd"])){
    $idD = mysql_real_escape_string(trim($_GET["delete-apd"]));

    mysql_query("DELETE FROM apd WHERE kodeapd ='$idD'") or die(mysql_error());
    header("location:../index.php?apd&sukseshapus");
}
else if(isset($_GET["delete-app"])){
    $idD = mysql_real_escape_string(trim($_GET["delete-app"]));

    mysql_query("DELETE FROM app WHERE kodeapp ='$idD'") or die(mysql_error());
    header("location:../index.php?app&sukseshapus");
}
else if(isset($_GET["delete-gi"])){
    $idD = mysql_real_escape_string(trim($_GET["delete-gi"]));

    mysql_query("DELETE FROM gi WHERE kodegi ='$idD'") or die(mysql_error());
    header("location:../index.php?gi&sukseshapus");
}
else if(isset($_GET["delete-aplikasi"])){
    $idD = mysql_real_escape_string(trim($_GET["delete-aplikasi"]));

    mysql_query("DELETE FROM aplikasi WHERE kodeaplikasi ='$idD'") or die(mysql_error());
    header("location:../index.php?aplikasi&sukseshapus");
}
else if(isset($_GET["delete-bidang"])){
    $idD = mysql_real_escape_string(trim($_GET["delete-bidang"]));

    mysql_query("DELETE FROM bidang WHERE kodebidang ='$idD'") or die(mysql_error());
    header("location:../index.php?bidang&sukseshapus");
}
