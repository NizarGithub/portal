<?php
include    "page/menu/menuAdmin.php";

if($_SESSION["level"]=="superadmin")
{
    echo menuAdmin();
}
?>
