<?php

// <!-- 1.waktu tidur yang baik untuk anak anak usia 6-12 adalah 10 jam. untuk usia 12-18 tahun adalah 8-9 jam.untuk usia 18-40 tahun
// 7-8 jam.apabila orang berusia 17 tahun berapa waktu tidur yang baik 

// 2.setiap orang memiliki imt dan kategori imt nya masing'12-18
//  kurang dari 18,5 : berat badan kurang
//  dari 18,5 sampai kurang dari 22,9 : normal
//  dari 22,9 sampai kurang dari 24,9 : berat badan lebih
//  lebih dari sama dengan 25: obesitas
//  Jika berat badan beni 44 kg dengan tinggi badan 148 cm termasuk dalam kategori apakah beni

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

// 4.Dani ingin membangun rumah di suatu komplek perumahan dengan panjang tanah 13 Meter dan lebar nya 9 meter
// tetapi sebelum membangun rumah dani harus memberi laporan terlebih dahulu tipe rumah yang ingin dia buat kepada kontraktur bangunan dengan luas
// tanah yang dia punya, masuk ke kategori manakah rumah dani nantinya
// tipe 36 = -90 m2
// tipe 45 = 90-96 m2
// tipe 54 = 96-120 m2
// tipe 60 = 120-150 m2
// tipe 70 = >150 m2
//  --->


$usia = 17;
$waktu_tidur = "";

if ($usia >= 6 && $usia <= 12) {
        $waktu_tidur = "10 jam" ;
} elseif ($usia >= 12 && $usia <= 18) {
    $waktu_tidur = "8-9" ;
} elseif ($usia >= 18 && $usia <= 40) {
    $waktu_tidur = "7-8" ;
} else {
    $waktu_tidur = "usia tidak dapat ditentukan";
}

echo "tidur yang baik di usia". $usia . "waktu tidurnya". $waktu_tidur;