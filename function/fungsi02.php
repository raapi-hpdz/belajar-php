<?php
function sapa($nama){
    echo"selamat pagi $nama".PHP_EOL;
}


echo "masukan nama:";
$nama =trim(fgets(STDIN));

sapa("$nama")
?>