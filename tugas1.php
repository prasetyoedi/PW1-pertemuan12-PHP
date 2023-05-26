<?php
$namaPanggilan = "ediiiiiiiiiiiiiiiiiiiiii"; 

$tanggal = date('d');
$jumlahHurufNama = strlen($namaPanggilan);

if ($jumlahHurufNama == ($tanggal - 2)) {
    echo "Berhasil";
} elseif ($jumlahHurufNama < $tanggal) {
    echo "Sedikit lagi";
} else {
    echo "Coba lagi";
}

?>