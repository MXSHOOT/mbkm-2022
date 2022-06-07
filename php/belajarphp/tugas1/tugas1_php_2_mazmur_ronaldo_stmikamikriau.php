<?php 

$namaPegawai = 'Tarno';
$agama = 'Islam'; // Agama (islam, kristen, hindu, budha, katolik)
$jabatan = 'Manager'; // Manager, Asisten, Kabag, Staff
$status = 'Menikah'; // Menikah, Belum Menikah
$jmlAnak = 4;

// Gaji Pokok
switch ($jabatan) {
    case 'Manager':
        $gapok = 20000000;
        break;
    case 'Asisten':
        $gapok = 15000000;
        break;
    case 'Kabag':
        $gapok = 10000000;
        break;
    case 'Staff':
        $gapok = 4000000;
        break;
    default:
        $gapok = 0;
        break;
}

// Tunjangan Jabatan
 $tunjab = 0.2 * $gapok;

// Tunjangan Keluarga
if ( $status == 'Menikah' && $jmlAnak <=2) {
    $tunkel = 0.05 * $gapok;
    
}elseif ( $status == 'Menikah' && $jmlAnak >= 3 && $jmlAnak <=5) {
    $tunkel = 0.1 * $gapok;
}else {
    $tunkel = 0;
}

// Gaji Kotor
$gator = $gapok + $tunjab + $tunkel;

// Zakat Profesi
$zakat = ($agama == 'Islam' && $gator >= 6000000 ) ? 0.025 * $gator : 0;

// Take Home Pay
$gaji_bersih = $gator - $zakat;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <p>Nama: <?= $namaPegawai; ?></p>
    <p>Agama: <?= $agama; ?></p>
    <p>Jabatan: <?= $jabatan; ?></p>
    <p>Status: <?= $status; ?></p>
    <p>Gaji Pokok: Rp<?= $gapok; ?></p>
    <p>Tunjangan Jabatan: Rp<?= $tunjab; ?></p>
    <p>Tunjangan Keluarga: Rp<?= $tunkel; ?></p>
    <p>Gaji Kotor: Rp<?= $gator; ?></p>
    <p>Zakat Profesi: Rp<?= $zakat; ?></p>
    <p>Take Home Pay: Rp<?= $gaji_bersih; ?></p>

    
</body>
</html>