<?php
require 'test1.php';
//ciptakan object
$s1 = new dataKonversiSuhu('Celcius', 70, 'Fahrenheit');
$s2 = new dataKonversiSuhu('Celcius', 50, 'Fahrenheit');
$s3 = new dataKonversiSuhu('Fahrenheit', 40, 'Celcius');
$s4 = new dataKonversiSuhu('Fahrenheit', 60, 'Celcius');
$s5 = new dataKonversiSuhu('Celcius', 40, 'Reamur');
$s6 = new dataKonversiSuhu('Celcius', 60, 'Reamur');
$s7 = new dataKonversiSuhu('Reamur', 30, 'Celcius');
$s8 = new dataKonversiSuhu('Reamur', 70, 'Celcius');

//panggil fungsi
$s1->cetak(); $s2->cetak(); $s3->cetak(); $s4->cetak(); $s5->cetak(); $s6->cetak(); $s7->cetak(); $s8->cetak();