<?php

$jamNormal = 8;
$kompensasiSatu = 50000;
$kompensasiDua = 25000;

$jamMulai = 8;
$jamSelesai = 22;

$jumlahJam = $jamSelesai - $jamMulai;

if ($jumlahJam > $jamNormal) {
    $jumlahJamKompensasi = $jumlahJam - $jamNormal;

    if ($jumlahJamKompensasi > 1) {
        $kompensasiAwal = $kompensasiSatu;
    } else {
        
}
}