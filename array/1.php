<?php

$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];

$kompeten = []; 
$tidakkompeten = [];

foreach ($bilangan as $nilai) {
    if ($nilai >= 75) {
        $kompeten[] = $nilai;
    } else {
        $tidakkompeten[] = $nilai;
    }
}

echo "Kelompok Kompeten: " . implode(', ', $kompeten) . "\n"; 
echo "<br>";
echo "Kelompok Belum Kompeten: " . implode(',', $tidakkompeten) . "\n";


