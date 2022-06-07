<?php
require 'testkonvert.php';
//ciptakan object
$g1 = new suhu_ubah('suhu 1',1);
$g2 = new suhu_ubah('suhu 2',2);
$g3 = new suhu_ubah('suhu 3',3);
$g4 = new suhu_ubah('suhu 4',4);

//panggil fungsi
$g1->cetak(); $g2->cetak(); $g3->cetak(); $g4->cetak();