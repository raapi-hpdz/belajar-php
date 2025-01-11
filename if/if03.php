<?php
echo "Masukkan nama : ";
$nama = trim(fgests(STDIN));
echo "Masukkan nilai anda : ";
$nilai = trim(fgets(STDIN));

if($nilai>=80){
    echo "selamat $nama, anda lulus";
}else{
    echo "selamat $nama, anda belum lulus";

}
?>