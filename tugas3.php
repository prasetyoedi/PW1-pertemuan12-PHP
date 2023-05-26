<?php
$namaDepan = "Prasetyo";
$kota = array(
    "Lampung",
    "Riau",
    "Jambi",
    "Bengkulu",
    "Makassar",
    "Kendari",
    "Gorontalo",
    "Samarinda",
    "Papua",
    "Nusa Tenggara Barat"
);

$namaArray = str_split($namaDepan);
$kotaDefault = "Jawa Timur";

foreach ($namaArray as $huruf) {
    $huruf = strtoupper($huruf);
    $kotaDitemukan = false;

    foreach ($kota as $k) {
        $hurufPertamaKota = strtoupper(substr($k, 0, 1));

        if ($huruf == $hurufPertamaKota) {
            $kotaDefault = $k;
            $kotaDitemukan = true;
            break;
        }
    }

    if ($kotaDitemukan) {
        break;
    }
}

echo "Nama Anda : " . $namaDepan . "<br>";
echo "Anda ditugaskan di kota : " . $kotaDefault;
?>