<?php
$tahun_lahir = 2004;
$tahun_sekarang = date("Y");

$selisih_tahun = $tahun_sekarang - $tahun_lahir;

if ($selisih_tahun >= 17) {
    echo "tahun kelahiran $tahun_lahir, sudah dapat memiliki ktp, usia = $selisih_tahun";
} else {
    echo "tahun kelahiran $tahun_lahir, belum dapat memiliki ktp, usia = $selisih_tahun";
}
