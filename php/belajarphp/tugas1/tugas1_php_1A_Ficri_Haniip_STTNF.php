<?php
// Buat Variabel
$namaPegawai = 'Ahmad Sopandi';
$agama = 'Islam';
$jabatan = 'Manager';
$status = 'Menikah';
$jmlAnak = 4;

/**
 * 1. Tentukan gaji pokok (switch case).
 * - Jika manager = 20jt, assmen = 15jt, kabag = 10jt, staff = 4jt. 
 */
switch ($jabatan) {
    case 'Manager':
        $gaPok = 20000000;
        break;
    case 'Asisten Manager':
        $gaPok = 15000000;
        break;
    case 'Kepala Bagian':
        $gaPok = 10000000;
        break;
    case 'Staff':
        $gaPok = 4000000;
        break;
    default:
        $gaPok = 0;
        break;
}
/**
 * 2. Tentukan tunjangan jabatan = 20% dari gaji pokok.
 */
$tunJab = $gaPok * 0.2;

/**
 * 3. Tentukan tunjangan keluarga :
 * -- Jika sudah menikah dan anak maksimal 2 = 5% dari gapok.
 * -- Jika sudah menikah dan anak antara 3 - 5 = 10% dari gapok
 * -- Selain itu belum dapat tunjangan keluarga
 */
if ($status == 'Menikah' && $jmlAnak > 0 && $jmlAnak <= 2) $tunKel = $gaPok * 0.05;
else if ($status == 'Menikah' && $jmlAnak >= 3 && $jmlAnak <= 5) $tunKel = $gaPok * 0.1;
else $tunKel = 0;

/**
 * 4. Tentukan gaji kotor
 */
$gaTor = $gaPok + $tunJab + $tunKel;

/**
 * 5. Tentukan zakat_profesi (ternary)
 * -- Jika ia muslim dan gaji kotor minimal 6 juta, ada zakat = 2.5% dari gaji kotor. Selain itu tidak zakat.
 */
$zaProf = ($gaTor >= 6000000 && $agama === 'Islam') ? $gaTor * 0.025 : 0;

/** 
 * 6. Tentukan take homepay.
 */
$takeHomePay = $gaTor - $zaProf;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 PHP</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: whitesmoke;
            height: 100vh;
            font-family: sans-serif;
        }

        .wrapper-1 {
            padding: 1rem;
            background-color: white;
            border-radius: 1rem;
            border: 3px dashed #171717;
        }

        .wrapper-1>h3 {
            margin: .7rem;
            padding: 0;
        }

        .wrapper-1>h3>span {
            color: gray;
            font-weight: normal;
        }

        button {
            padding: .5rem 1rem;
            color: #171717;
            font-weight: 700;
            border-radius: .5rem;
        }

        .wrapper-1>.--detail>span {
            display: inline-block;
            font-size: 2rem;
            font-weight: 700;
            color: #171717;
            text-align: center;
            padding: 1rem;
        }

        .hide {
            display: none;
        }
    </style>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper-1">
        <h3>
            Nama : <span><?= $namaPegawai ?> </span>
        </h3>
        <h3>
            Jabatan : <span><?= $jabatan ?> </span>
        </h3>
        <h3>
            Status : <span><?= $status ?> </span>
        </h3>
        <h3>
            Jumlah Anak : <span><?= $jmlAnak ?> </span>
        </h3>
        <h3>
            Agama : <span><?= $agama ?> </span>
        </h3>
        <button type="button" class="btn">
            Klik untuk menampilkan nominal gaji
        </button>
        <div class="--detail hide">
            <span>Rp. <?= number_format($takeHomePay) ?></span>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.btn').click(function() {
                $('.--detail').removeClass('hide');
            });
        });
    </script>
</body>

</html>