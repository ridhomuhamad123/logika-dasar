<?php
$total_belanja = 130000;
$hari = 'Selasa'; 

$diskon = 0;
if ($total_belanja > 100000) {
    $diskon += 7;
}
if ($hari == 'Selasa') {
    $diskon += 5;
}

$total_bayar = $total_belanja - ($total_belanja * $diskon / 100);

echo "Total yang harus dibayar: " . $total_bayar;
?>