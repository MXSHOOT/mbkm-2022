<?php
//diketahui
$nama = 'Siti Aminah';
$matpel = 'Bahasa Indonesia';
$nilai = 25.99;

//1. tentukan kelulusan minimal nilai 60 (ternary)
$keterangan = ($nilai >= 60) ? 'Lulus' : 'Gagal';
//2. tentukan grade A, B, C, D, E (if multi kondisi)
if($nilai >= 85 && $nilai <= 100) $grade = 'A';
else if($nilai >= 75 && $nilai < 85) $grade = 'B'; 
else if($nilai >= 60 && $nilai < 75) $grade = 'C';
else if($nilai >= 30 && $nilai < 60) $grade = 'D'; 
else if($nilai >= 0 && $nilai < 30) $grade = 'E';
else $grade = '';  
//3. tentukan predikat (switch case)
switch ($grade) {
    case 'A': $predikat = 'Memuaskan'; break;
    case 'B': $predikat = 'Bagus'; break;
    case 'C': $predikat = 'Cukup'; break;
    case 'D': $predikat = 'Kurang'; break;
    case 'E': $predikat = 'Buruk'; break;
    default: $predikat = '';
}
?>
Nama Siswa : <?= $nama ?>
<br /> Mata Pelajaran : <?= $matpel ?>
<br /> Nilai : <?= $nilai ?>
<br /> Keterangan : <?= $keterangan ?>
<br /> Grade : <?= $grade ?>
<br /> Predikat : <?= $predikat ?>