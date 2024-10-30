<?php
$buah = array('apel','durian','semangka','pepaya','manggis');
foreach($buah as $buahan){
echo("buahan <br>")
}
echo("<hr>");
$siswa = array(
    'nama'=> 'dimas',
    'umur'=> '20',
    'kota'=> 'binjai',
    'jurusan'=> 'sistem informasi',
);

echo 'nama siswa :' . $siswa['nama'].'<br>';
echo 'nama siswa :' . $siswa['umur'].'<br>';
echo 'nama siswa :' . $siswa['kota'].'<br>';
echo 'nama siswa :' . $siswa['jurusan'].'<br>';
?>