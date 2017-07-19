<?php
    ob_start();
    session_start();
    date_default_timezone_set("Asia/Jakarta");
    require_once ('config/koneksi.php');
    $a      = mysql_real_escape_string(strip_tags($_GET["kodeaplikasi"]));
    //$b      = mysql_real_escape_string(strip_tags($_GET["kodelogin"]));
    $date  = date("Y-m-d H:i:s");
    //$session = 1;
    mysql_query("INSERT INTO loglogin VALUES ('','$_SESSION[kodelogin]','$a','$date')");
    //echo "INSERT INTO loglogin VALUES ('','$session','$a','$date')";
    $sql = mysql_query("SELECT * FROM aplikasi WHERE kodeaplikasi='$a'");
    while($raw = mysql_fetch_array($sql)){
        if ($a=='1') {
            header("location:$raw[alamataplikasi]");
        }
        elseif ($a=='2') {
            header("location:$raw[alamataplikasi]");
        }
        elseif ($a=='3') {
            header("location:$raw[alamataplikasi]");
        }
        elseif ($a=='4') {
            header("location:$raw[alamataplikasi]");
        }
        elseif ($a=='5') {
            header("location:$raw[alamataplikasi]");
        }
        elseif ($a=='6') {
            header("location:$raw[alamataplikasi]");
        }
    }
?>
