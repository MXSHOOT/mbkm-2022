<?php
$nama = "Asharul";
$agama = "Konghucu";
$jabatan = "Kabag";  // Manager,Asisten,Kabag, Staff
$status = "Menikah";   // Menikah, Belum Menikah
$jmlAnak = 4;

// 1. tentukan gaji pokok(switch case)
switch($jabatan){
    case 'Manager':
        $gajiPokok = 20000000;
        break;
    case 'Asisten':
        $gajiPokok = 15000000;
        break;
    case 'Kabag':
        $gajiPokok = 10000000;
        break;
    case 'Staff':
        $gajiPokok = 4000000;
        break;
    default:
        $gajiPokok = 0;
        break;
}
// 2. tunjangan jabatan = 20% gaji pokok
$tunjanganJabatan = $gajiPokok * 0.2;
// 3. tunjangan keluarga (if multi kondisi)
if($status == "Menikah" && $jmlAnak <= 2){
    $tunjanganKeluarga = $gajiPokok * 0.05;
}elseif($status == "Menikah" && $jmlAnak >= 3 && $jmlAnak < 5){
    $tunjanganKeluarga = $gajiPokok * 0.1;
}else{
    $tunjanganKeluarga = 0;
}
// gaji kotor
$gajiKotor = $gajiPokok + $tunjanganJabatan + $tunjanganKeluarga;
// zakat profesi
$zakatProfesi = ($gajiKotor >= 6000000 && $agama == "Islam") ? $gajiKotor * 0.025 : 0;
$gajiBersih = $gajiKotor - $zakatProfesi;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Karyawan</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }
        th{
            background-color: #4CAF50;
            color: white;
        }
        table, th, td{
            border: 1px solid black;
        }
        th, td{
            padding: 10px;
        }
    </style>
</head>
<body style="text-align:center">
    <h1>Tabel Karyawan</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Agama</th>
            <th>Jabatan</th>
            <th>Status</th>
            <th>Jumlah Anak</th>
            <th>Gaji Pokok</th>
            <th>Tunjangan Jabatan</th>
            <th>Tunjangan Keluarga</th>
            <th>Gaji Kotor</th>
            <th>Zakat Profesi</th>
            <th>Gaji Bersih</th>
        </tr>
        <tr>
            <td><?= $nama; ?></td>
            <td><?= $agama; ?></td>
            <td><?= $jabatan; ?></td>
            <td><?= $status; ?></td>
            <td><?= $jmlAnak; ?></td>
            <td><?= $gajiPokok; ?></td>
            <td><?= $tunjanganJabatan; ?></td>
            <td><?= $tunjanganKeluarga; ?></td>
            <td><?= $gajiKotor; ?></td>
            <td><?= $zakatProfesi; ?></td>
            <td><?= $gajiBersih; ?></td>
        </tr>
    </table>
</body>
</html>