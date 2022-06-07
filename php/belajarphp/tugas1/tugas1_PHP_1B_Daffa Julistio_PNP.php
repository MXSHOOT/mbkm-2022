<?php

$nama_pegawai = 'Ahmad Yusuf';
$agama = 'Islam';
$jabatan = 'Manager';
$status = 'Menikah';
$jmlAnak = 4;

$gapok;

switch ($jabatan) {
    case 'Manager': $gapok = 20000000;
        break;
    case 'Asisten': $gapok = 15000000;
        break;
    case 'Kabag': $gapok = 10000000;
        break;
    case 'Manager': $gapok = 4000000;
        break;
    
    default:
        $gapok = 0;
        break;
}


$tunjab = 0.2 * $gapok;


$tunkel;

if($status == 'Menikah' && $jmlAnak <= 2) $tunkel = 0.05 * $gapok;
else if($status == 'Menikah' && $jmlAnak >= 3 && $jmlAnak <= 5) $tunkel = 0.1 * $gapok;
else $tunkel = 0;


$gajiKotor = $gapok + $tunjab + $tunkel;


$zakat = ($agama == 'Islam' && $gajiKotor >= 6000000) ? 0.025 * $gajiKotor : 0;


$thp = $gajiKotor - $zakat;
echo '<br/><hr/>Nama Pegawai : '.$nama_pegawai;
echo '<br/>Agama : '.$agama;
echo '<br/>Jabatan : '.$jabatan;
echo '<br/>Status : '.$status;
echo '<br/>Jumlah Anak : '.$jmlAnak;
echo '<br/>Gaji = '.$gapok;
echo '<br/>Tunjangan Jabatan : '.$tunjab;
echo '<br/>Tunjangan Keluarga : '.$tunkel;
echo '<br/>Gaji Kotor : '.$gajiKotor;
echo '<br/>Zakat Profesi : '.$zakat;
echo '<br/>Taje Home Pay : '.$thp.'<br/><hr/>';