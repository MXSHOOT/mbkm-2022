<?php
    $namapegawai = 'Ahmad Sopandi';
    $agama = 'Islam';
    $jabatan = 'Manager';
    $status = 'Menikah';
    $jmlAnak = 4;

    switch ($jabatan) {
        case ('Manager'): $gapok = 20000000; break;
        case ('Asisten'): $gapok = 15000000; break;
        case ('Kabag'): $gapok = 10000000; break;
        case ('Staff'): $gapok = 4000000; break;
        default: $gapok = 0;
    }

    $tunjab = 0.2 * $gapok;

    if ($jmlAnak <= 2) $tunkel = 0.05 * $gapok;
    else if ($jmlAnak > 2 && $jmlAnak <= 5) $tunkel = 0.1 * $gapok;
    else $tunkel = 0;

    $gator = $gapok + $tunjab + $tunkel;
    $zakat = ($agama == 'Islam' && $gator >= 6000000) ? 0.025 * $gator : 0;
    $home_pay = $gator - $zakat; 
?>

<html>
    <head>
        <title>Tugas 1 PHP</title>
        <style>
            body {
                background-color: #3B3B52;
            }

            form {
                color: white;
                background-color: rgba(0, 0, 0, 0.5);
                border: 2px solid #282E1A;
                border-radius: 15px;
                padding: 15px 10px;
                box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
                font-family: Calibri, Cambria, Arial, Helvetica, sans-serif;
            }

            td {
                color: white;
                font-size: 16pt;
            }
 
            input[type=text],
            input[type=number] {
                background-color: rgb(218, 216, 216);
                font-size: 12pt;
                padding: 10px;
                margin: 8px 10px;
                border: none;
                border-radius: 4px;
                float:'left';
                margin-left: 50px;
            }
        </style>
    </head>
    <body>
        <form>
            <table align="center">
                <tr>
                    <td>Nama</td>
                    <td><input type="text" value="<?php echo $namapegawai ?>" disabled></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td><input type="text" value="<?php echo $agama ?>" disabled></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td><input type="text" value="<?php echo $jabatan ?>" disabled></td>
                </tr>
                <tr>
                    <td>Status Perkawinan</td>
                    <td><input type="text" value="<?php echo $status ?>" disabled></td>
                </tr>
                <tr>
                    <td>Jumlah Anak</td>
                    <td><input type="text" value="<?php echo $jmlAnak ?>" disabled></td>
                </tr>
                <tr>
                    <td>Gaji Pokok</td>
                    <td><input type="text" value="Rp. <?= number_format($gapok, 0, ',', '.') ?>" disabled></td>
                </tr>
                <tr>
                    <td>Tunjangan Jabatan</td>
                    <td><input type="text" value="Rp. <?= number_format($tunjab, 0, ',', '.') ?>" disabled></td>
                </tr>
                <tr>
                    <td>Tunjangan Keluarga</td>
                    <td><input type="text" value="Rp. <?= number_format($tunkel, 0, ',', '.') ?>" disabled></td>
                </tr>
                <tr>
                    <td>Gaji Kotor</td>
                    <td><input type="text" value="Rp. <?= number_format($gator, 0, ',', '.') ?>" disabled></td>
                </tr>
                <tr>
                    <td>Zakat Profesi</td>
                    <td><input type="text" value="Rp. <?= number_format($zakat, 0, ',', '.') ?>" disabled></td>
                </tr>
                <tr>
                    <td>Take Home Pay</td>
                    <td><input type="text" value="Rp. <?= number_format($home_pay, 0, ',', '.') ?>" disabled></td>
                </tr>
            </table>
        </form>
    </body>
</html>