<?php
echo "masukan nilai awal:";
$awal =trim(fgets(STDIN));

echo "masukan nilai AHIR:";
$akhir =trim(fgets(STDIN));

for ($awal; $awal <=$akhir; $awal++){
    echo "anak kandung  ke- $awal \n";
}

?>