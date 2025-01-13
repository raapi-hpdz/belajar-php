<?php
$siswa =[
    "siswa1"=>[
        "nama"=> "Nata de coco",
        "kelas"=> "12",    
    ],
    "siswa2"=>[
        "nama"=> "Nata dingdong",
        "kelas"=> "10",    
]
    ];
    foreach( $siswa as $murid){
        foreach($murid as $data){
            echo"$data \n";
        }
    }
?>