<?php
echo "Masukkan nilai anda : ";
$nilai = trim(fgets(STDIN));

if($nilai<=0){
    echo " kamu looo belum UJIAN kok minta NILAI  ";
}
elseif($nilai<60){
    echo "nilai : $nilai\n";
    echo "grade : E";
 
}elseif($nilai<70){
    echo "nilai : $nilai\n";
    echo "grade : D";
 
}elseif($nilai<80){
    echo "nilai : $nilai\n";
    echo "grade : C";
 
}elseif($nilai<90){
    echo "nilai : $nilai\n";
    echo "grade : B";
 
}elseif($nilai<=100){
    echo "nilai : A";

}else
    echo "maaf nilai tidak sah"

?>
 
