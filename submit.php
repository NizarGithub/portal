<?php
    $a      = mysql_real_escape_string(strip_tags($_GET["submit"]));
    $date  = date("Y-m-d H:i:s");
    mysql_query("INSERT INTO loglogin VALUES ('','$_SESSION[kodelogin]','$a','$date')");

    $sql = mysql_query("SELECT * FROM aplikasi WHERE kodeaplikasi='$a'");
    while($raw = mysql_fetch_array($sql)){
        header("location:$raw[alamataplikasi]");
    }
?>
