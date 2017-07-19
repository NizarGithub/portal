<?php
    $a      = mysql_real_escape_string(strip_tags($_GET["submit"]));
    $date  = date("Y-m-d H:i:s");
    mysql_query("INSERT INTO loglogin VALUES ('','$_SESSION[kodelogin]','$a','$date')");

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
