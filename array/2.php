<?php

$data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ]
];

foreach ($data as $orang) {
    $nama = $orang['nama']; 
    $tahun = $orang['tahun']; 
    if ($tahun % 4 == 0 ) { echo "<br>";
        echo $nama . " lahir pada tahun kabisat.\n";
    } else { echo "<br>";
        echo $nama . " tidak lahir pada tahun kabisat.\n";
    }

}

