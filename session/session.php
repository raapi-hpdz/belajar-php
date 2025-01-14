<?php
session_start();
$_session["username"] = "joko";
$_session["password"] = "rahasia";

echo "berhasil membuat session";
echo "<br>";

echo "<a href=cek_session.php>
cek session</a>";
?>