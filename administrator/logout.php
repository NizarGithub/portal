<?php
session_start();
$_SESSION["email"] = "";
$_SESSION["kodelogin"] = "";

unset($_SESSION["email"]);
unset($_SESSION["kodelogin"]);

session_unset();
session_destroy();
header("location:../login.php");
