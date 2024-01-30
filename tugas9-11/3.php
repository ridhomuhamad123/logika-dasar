<?php
$harga_beli = 100000;
$diskon = 10000;

$diskon_terima = $harga_beli - $diskon;

if ($harga_beli >= 100000) {
    echo "diskon diterima karena belanja di atas = 100000";
} else {
    echo "diskon tidak diterima karena belanja di bawah = 100000";
}