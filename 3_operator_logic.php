<?php
function pembagian($angka, $pembagi)
{
    $angka_awal = $angka;
    $a = $pembagi;
    $hasil = 0;
    while ($pembagi <= $angka) {
        $angka = $angka - $pembagi;
        $a++;
        $hasil++;
    }
    echo 'hasil dari ' . $angka_awal . ' : ' . $pembagi . ' = ' . $hasil;
}
pembagian($angka = 8, $pembagi = 4);
