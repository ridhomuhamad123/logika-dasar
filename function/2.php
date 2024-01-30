<?php

function formatAngka($angka) {

    if ($angka >= 1000000) {
        $formatangka = number_format($angka / 1000000, 1) . 'M';
    } elseif ($angka >= 1000) {
        $formatangka = number_format($angka / 1000, 1) . 'K';
    } else {
        $formatangka = $angka;
    }

    echo $formatangka;
    echo "</br>";
}

formatAngka(9000);
echo "</br>";

formatAngka(1700000);
