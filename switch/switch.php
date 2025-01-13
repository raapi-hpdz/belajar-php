<?php



echo " masukan kode rahasia: ";
$kode = trim(fgets(STDIN));

switch ($kode){
    case 1:
        echo "selamat datang admin";
        break;
    case 2:
        echo "selamat datang User";
        break;
    case 3:
        echo "selamat datang tamu";
        break;
    default:
        echo "maaf akses di tolak";
        break;
    }
?>