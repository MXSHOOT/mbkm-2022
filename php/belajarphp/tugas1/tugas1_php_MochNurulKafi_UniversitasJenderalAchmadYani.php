<!-- Pendeklarasian Variabel -->
<?php
//untuk index nomor
$no = 1;
//data data pegawai
$pegawais = [
    [
        'nama' => 'Moch',
        'agama' => 'Islam',
        'jabatan' => 'Manager',
        'status' => "Belum Menikah",
        'jmlAnak' => 0,
    ],
    [
        'nama' => 'Cristian Siu',
        'agama' => 'Kristen',
        'jabatan' => 'Staff',
        'status' => "Menikah",
        'jmlAnak' => 2,
    ],
    [
        'nama' => 'King Messi',
        'agama' => 'Kristen',
        'jabatan' => 'Staff',
        'status' => "Belum Menikah",
        'jmlAnak' => 0,
    ],
    [
        'nama' => 'Nurul',
        'agama' => 'Islam',
        'jabatan' => 'Assisten',
        'status' => "Menikah",
        'jmlAnak' => 4,
    ],
    [
        'nama' => 'Kafi',
        'agama' => 'Islam',
        'jabatan' => 'Kabag',
        'status' => "Belum Menikah",
        'jmlAnak' => 0,
    ],
    [
        'nama' => 'Ale Gunner',
        'agama' => 'Hindu',
        'jabatan' => 'Kabag',
        'status' => "Menikah",
        'jmlAnak' => 7,
    ],
    [
        'nama' => 'Doni Salmanan',
        'agama' => 'Islam',
        'jabatan' => 'Assisten',
        'status' => "Menikah",
        'jmlAnak' => 1,
    ],
    [
        'nama' => 'Cau Nima',
        'agama' => 'Konguchu',
        'jabatan' => 'Manager',
        'status' => "Belum Menikah",
        'jmlAnak' => 0,
    ]
];
//untuk mentukan gaji pokok berdasarakan jabatan
function gajipokok(String $jabatan)
{
    switch ($jabatan) {
        case 'Manager':
            return 20000000;
            break;
        case "Assisten":
            return 15000000;
            break;
        case "Kabag":
            return 10000000;
            break;
        case "Staff":
            return 5000000;
            break;
        default:
            return "0";
            break;
    }
}
//untuk menentukan tunjungan keluarga berdasarakan status dan jumlah anak
function tunjungan_keluarga(String $status, int $jmlAnak, int $gajipokok)
{
    if ($status == "Menikah" && $jmlAnak <= 2) {
        return $gajipokok * (5 / 100);
    } else if ($status == "Menikah" && $jmlAnak >= 3 && $jmlAnak <= 5) {
        return $gajipokok * (10 / 100);
    } else {
        return 0;
    }
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins';
        }
    </style>
</head>

<body>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card" >
                    <div class="card-header bg-info text-white">
                        Data Diri
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <div class="row">
                                <div class="col-md-5">
                                    Nama
                                </div>
                                <div class="col-md-1">
                                    :
                                </div>
                                <div class="col-md-6">
                                    Moch Nurul Kafi
                                </div>
                                <div class="col-md-5">
                                    NIM
                                </div>
                                <div class="col-md-1">
                                    :
                                </div>
                                <div class="col-md-6">
                                    3411191101
                                </div>
                                <div class="col-md-5">
                                    Asal Kampus
                                </div>
                                <div class="col-md-1">
                                    :
                                </div>
                                <div class="col-md-6">
                                    Universitas Jenderal Achmad Yani
                                </div>
                                <div class="col-md-5">
                                    Kelompok
                                </div>
                                <div class="col-md-1">
                                    :
                                </div>
                                <div class="col-md-6">
                                    1B
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" >
                    <div class="card-header bg-info text-white">
                        Data Tugas
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <div class="row">
                                <div class="col-md-5">
                                    Nama Tugas
                                </div>
                                <div class="col-md-1">
                                    :
                                </div>
                                <div class="col-md-6">
                                    Tugas 1 PHP
                                </div>
                                <div class="col-md-5">
                                    Tanggal Pengerjaan
                                </div>
                                <div class="col-md-1">
                                    :
                                </div>
                                <div class="col-md-6">
                                    16 - Maret - 2022
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="card mt-3">
            <div class="card-header bg-success text-white">
                <h5 class="text-center">Data Gaji Karyawan</h5 class="text-center">
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
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
                        <th>Take Home Pay</th>
                    </tr>
                    <?php
                    foreach ($pegawais as $pegawai) {
                        $gajipokok = gajipokok($pegawai['jabatan']);
                        $tunjanganjabatan = $gajipokok * 20 / 100;
                        $tunjangankeluarga = tunjungan_keluarga($pegawai['status'], $pegawai['jmlAnak'], $gajipokok);
                        $gajikotor = $gajipokok + $tunjanganjabatan + $tunjangankeluarga;
                        $zakat = ($pegawai['agama'] == "Islam" && $gajikotor > 6000000) ? $zakat = $gajikotor * (2.5 / 100) :  $zakat = 0;
                        $takehomepay = $gajikotor - $zakat;
                        echo
                        "<tr>
                            <td>" . $no++ . "</td>
                            <td>" . $pegawai['nama'] . " </td>
                            <td>" . $pegawai['agama'] . "</td>
                            <td>" . $pegawai['jabatan'] . "</td>
                            <td>" . $pegawai['status'] . "</td>
                            <td>" . $pegawai['jmlAnak'] . "</td>
                            <td>" . number_format($gajipokok) . "</td>
                            <td>" . number_format($tunjanganjabatan) . "</td>
                            <td>" . number_format($tunjangankeluarga) . "</td>
                            <td>" . number_format($gajikotor) . "</td>
                            <td>" . number_format($zakat) . "</td>
                            <td>" . number_format($takehomepay) . "</td>
                        </tr>";
                    }
                    ?>
                </table>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>