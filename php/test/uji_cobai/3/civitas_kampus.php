<?php
require_once 'Data.php';
//ciptakan obj
$d1 = new Data(1,'Rumah',2020,'Type 36/72', 500000000);
$d2 = new Data(2,'Villa',2018,'Puncak Bogor', 1000000000);
$d3 = new Data(3, 'Villa',2020,'Anyer', 1500000000);
$d4 = new Data(4, 'Mobil',2015,'Honda CRV', 300000000);
$d5 = new Data(5, 'Mobil',2016,'Toyota Avanza', 150000000);
$d6 = new Data(6, 'Motor',2020,'Honda Beat', 15000000);
$d7 = new Data(7, 'Motor',2021,'Nmax', 30000000);
$d8 = new Data(8, 'Logam Mulia',2019,'10 kg', 15000000);
$d9 = new Data(9, 'Logam Mulia',2020,'5 kg', 8000000);
$d10 = new Data(10, 'Berlian',2020,'5 kg', 10000000);

$data = [$d1, $d2, $d3, $d4, $d5, $d6, $d7, $d8, $d9, $d10];

echo '<h3>Data Civitas Kampus</h3>';
echo '<table>';
echo '<thead><tr><th>No</th><th>Nama</th><th>Tahun</th><th>Keterangan</th><th>Nilai</th></tr></thead><tbody>';
//print_r($data); die();
foreach($data as $d){
    echo $d->cetak();    
}
echo '</tbody>';
echo '<tfoot>';
foreach($data as $d){
    echo $d->sum_array(cetak($nilai));    
}
echo '</tfoot>';
echo '</table>';