<?php
include '../View/LogIn.php';
$lfl=fopen("Log.txt","a") or die("Unable to open the file");
$txt1=$_GET["uname"];
fwrite($lfl, $txt1);
fclose($lfl);
?>