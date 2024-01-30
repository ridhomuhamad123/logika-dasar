<?php

// 2.setiap orang memiliki imt dan kategori imt nya masing'12-18
//  kurang dari 18,5 : berat badan kurang
//  dari 18,5 sampai kurang dari 22,9 : normal
//  dari 22,9 sampai kurang dari 24,9 : berat badan lebih
//  lebih dari sama dengan 25: obesitas
//  Jika berat badan beni 44 kg dengan tinggi badan 148 cm termasuk dalam kategori apakah beni
// <?php 
// <?php 

// $beratBadan = 44;
// $tinggiBadan = 148;

// $tinggiBadanMeter = $tinggiBadan / 100; 
// $imt = $beratBadan / ($tinggiBadanMeter * $tinggiBadanMeter);

// if ($imt < 18.5) {
//     $kategori = "berat badan kurang";
// }elseif ($imt >= 18.5 && $imt < 22.9) {
//     $kategori = "normal";
// }elseif ($imt >= 22.9 && $imt <24.9) {
//     $kategori = "berat badan lebih";
// } else {
//     $kategori = "obesitas";
// }

// echo "IMT Beni adalah " . round($imt, 2) . ". Beni termasuk dalam kategori '" . $kategori . "'.";
// 


$bb = 44; 
$tb = 148;

$tinggibadanMeter = $tb /100;
$imt = $bb / ($tinggibadanMeter * $tinggibadanMeter);

if ($imt < 18.5) {
    $kategori = "berat badan kurang";  
}elseif ($imt >= 18.5 &&  $imt < 22.9) {
    $kategori = "normal";
}elseif ($imt >= 22.9 && $imt < 24.9) {
    $kategori = "berat badan lebih";
} else {
    $kategori = "obesitas"; 
}

echo "imt beni adalah " . round($imt) . " beni termasuk kedalam kategori '". $kategori . "'.";