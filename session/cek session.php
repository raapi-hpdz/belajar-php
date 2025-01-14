<?php
session_start();

echo "username". 
$_SESSION["username"];

echo"<br>";

echo "pasword: ".
$_SESSION["password"];
?>