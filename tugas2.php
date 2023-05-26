<?php
$kelompok = array(
    array("Nama" => "Prasetyo Edi Pamungkas", "NIM" => "493905"),
    array("Nama" => "Dragan", "NIM" => "493906"),
    array("Nama" => "Farhan", "NIM" => "493907"),
    array("Nama" => "Maulana", "NIM" => "493908"),
    array("Nama" => "Zoro", "NIM" => "493909"),
);

foreach ($kelompok as $anggota) {
    $nama = $anggota["Nama"];
    $nim = $anggota["NIM"];

    if ($nim % 2 == 0) {
        $peran = "Back-end Developer";
    } else {
        $peran = "Front-end Developer";
    }

    echo "Nama : " . $nama . "<br>";
    echo "NIM : " . $nim . "<br>";
    echo "Peran : " . $peran . "<br><br>";
}

?>