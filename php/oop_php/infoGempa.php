<?php
require 'Gempa.php';
//ciptakan object
$g1 = new Gempa('Banten',0.1);
$g2 = new Gempa('Tokyo',3.5);
$g3 = new Gempa('Florida',5.1);
$g4 = new Gempa('Thailand',7.5);

//panggil fungsi
$g1->cetak(); $g2->cetak(); $g3->cetak(); $g4->cetak();