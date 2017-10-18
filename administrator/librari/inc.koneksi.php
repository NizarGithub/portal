<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db	  = "tsa";


$koneksi	= mysql_connect("$host","$user","$pass");
if (! $koneksi) {
  echo "Gagal koneksi..!";
  mysql_error();
}
// memilih database pada server
mysql_select_db("$db")
	 or die ("Database nggak ada tuh".mysql_error());





?>
