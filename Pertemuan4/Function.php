<?php
function tambah($a, $b){
    $hasil = $a + $b;
    echo("hasil penjumlahan = $hasil");
}


tambah(10, 3);
echo("<br>");
tambah(40, 50);
echo("<hr>");

function kali($c, $b){
    $hasil_kali = $c * $b;
    return $hasil_kali;
}

$perkalian = kali(3,4);
echo("hasil perkalian = $perkalian");
?>