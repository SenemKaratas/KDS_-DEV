<?php
header('Content-Type: text/html; charset=utf-8');
include("ayar.php");
session_start();
ob_start();
if(($_POST["username"]==$user) and ($_POST["password"]==$pass)){
$_SESSION["login"] = "true";
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;
header("Location:atm.php");
}else{
echo "<center>Kullancý Adý veya Þifre Yanlýþ.<br>";
echo "Giriþ sayfasýna yönlendiriliyorsunuz.</center>";
header("Refresh: 2; url=atm.php");
}
ob_end_flush();
?>