<?php
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

//ciptakan object
$m1 = new Lingkaran(4);
$m2 = new PersegiPanjang(5,9);
$m3 = new Segitiga(2,4);

$m1->cetak(); $m2->cetak(); $m3->cetak(); 

$data = [$m1, $m2, $m3];

$judul = ['No','Nama Bidang','Keterangan','Luas Bidang','Keliling Bidang'];

        

echo '<h3>Data Hasil</h3>';
echo '<table>';
echo '<thead><tr>';
foreach($judul as $jdl){
    echo '<th>'.$jdl.'</th>';
}
foreach ($data as $value) {
    echo "<tr>$value</tr>";
  }
echo '</thead><tbody>';
//print_r($data); die();
foreach($data as $d){
    echo $d->cetak();    
}
echo '</tbody>';
echo '<tfoot>';
echo '</tfoot>';
echo '</table>';