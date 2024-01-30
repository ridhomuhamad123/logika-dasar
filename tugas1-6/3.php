<?php

// 3. Menu rumah makan beni
// nasi goreng : 15k
// ayam bakar : 20k
// nasi kebuli : 25k
// aneka jus : 8k
// es teh manis : 3k
// es jeruk : 5k

// rumah makan beni mengadakan program jumat berkah dengan memberikan diskon sebesar 5% di hari jumat
// an 2% di hari senin. Hitunglah harga yang harus di bayar jika dani ingin membeli 2 nasi kebuli, 1 ayam bakar
// ,2 nasi goreng (gunakan hari secara otomatis dari hari ini)


$nasgor = 15000; 
$ayambakar= 20000;
$nasbul = 25000;
$anekajus = 8000;
$esteh = 3000;
$esjer = 5000;
$beli = $nasbul + $nasbul + $ayambakar + $nasgor + $nasgor ;
$diskon = 0;
$tanggal = date("l-m-Y");
$hari = ("l");

if ($hari == "Friday") {
    $diskon = 5;
} elseif ($hari == "Monday") {
    $diskon = 2;
} else {
    $diskon = 0;
}

echo "tanggal". $tanggal . "<br>";
echo "harga bayar jika tidak hari senin dan jumat ". $beli . "<br>";
echo "DISKON :". $diskon;


