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

    foreach ($siswa as $murid => $santri){
        echo strtoupper ($murid).PHP_EOL;
        foreach($santri as $data => $isi){;
            echo ucwords($data)." : ".$isi. PHP_EOL;
        }
    }
?>