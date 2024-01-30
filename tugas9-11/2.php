<?php

$matematika = 81;
$inggris = 82;
$indonesia = 80;
$nilaiMinimum = 85;

$total = $matematika + $inggris + $indonesia;
$rataRata = $total / 3;

echo "matematika: " . $matematika . "<br>";
echo "inggris: " . $inggris . "<br>";
echo "indonesia: " . $indonesia . "<br>";

if ($rataRata > $nilaiMinimum){
    echo "rata rata nilai anda: " . $rataRata . "<br>";
}else{
    echo "rata rata nilai anda: " . $rataRata . "<br>";
}

echo "Rata-rata nilai Matematika, Bahasa Inggris, dan Bahasa Indonesia adalah: " .$rataRata. "<br>";

if ($rataRata >= 85){
    echo "peserta dinyatakan lulus  <br>";
}else{
    echo "peserta dinyatakan tidak lulus <br>";
}


?>