<?php

function bandingkan_nama($nama1, $nama2) {
    $jumlah1 = strlen($nama1);
    $jumlah2 = strlen($nama2);

    if ($jumlah1 > $jumlah2) {
        $lebih_banyak = $nama1;
        $selisih = $jumlah1 - $jumlah2;
    } elseif ($jumlah2 > $jumlah1) {
        $lebih_banyak = $nama2;
        $selisih = $jumlah2 - $jumlah1;
    } else {
        return "Kedua nama memiliki jumlah karakter yang sama.";
    }

    return "Nama dengan jumlah karakter lebih banyak: " . $lebih_banyak . "\nSelisih jumlah karakter: " . $selisih;
}

echo bandingkan_nama("ridho", "ramad");


