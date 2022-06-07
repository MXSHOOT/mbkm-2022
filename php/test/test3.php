<?php

//array scalar

$p1 = ['nip'=>'111','nama'=>'Andi', 'jabatan'=>'Manager','divisi'=>'SDM','agama'=>'Islam'];
$p2 = ['nip'=>'112','nama'=>'Yanto', 'jabatan'=>'Asisten','divisi'=>'SDM','agama'=>'Islam'];
$p3 = ['nip'=>'212','nama'=>'Toni', 'jabatan'=>'Asisten','divisi'=>'Keuangan','agama'=>'Islam'];
$p4 = ['nip'=>'213','nama'=>'Budi', 'jabatan'=>'Kabag','divisi'=>'Keuangan','agama'=>'Islam'];
$p5 = ['nip'=>'211','nama'=>'Endi', 'jabatan'=>'Manager','divisi'=>'Keuangan','agama'=>'Islam'];
$p6 = ['nip'=>'114','nama'=>'Wiliam', 'jabatan'=>'Kabag','divisi'=>'SDM','agama'=>'Islam'];
$p7 = ['nip'=>'132','nama'=>'Erman', 'jabatan'=>'Staff','divisi'=>'Operasional','agama'=>'Islam'];
$p8 = ['nip'=>'321','nama'=>'Rista', 'jabatan'=>'Staff','divisi'=>'Operasional','agama'=>'Islam'];
$p9 = ['nip'=>'333','nama'=>'Riski', 'jabatan'=>'Staff','divisi'=>'SDM','agama'=>'Islam'];
$p10 = ['nip'=>'311','nama'=>'Ahmad', 'jabatan'=>'Staff','divisi'=>'Marketing','agama'=>'Islam'];

// - buat sampai 10 pegawai
// - jabatan : Manager, Asisten, Kabag, Staff
// - divisi : SDM, Keuangan, Operasional, Marketing
// - agama : agama di indonesia

//array associative

$ar_pegawai = [$p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10];


//array scalar

$ar_judul = ['No','NIP','Nama','Jabatan','Divisi','Agama','Gaji Pokok','Tunjangan Jabatan','Gaji Kotor','Take Home Pay'];



?>

<h3 align="center">Daftar Pegawai</h3>
<table border="0" align="center" cellpadding="10" cellspacing="0">
    <thead>
        <tr bgcolor="tomato">
            <?php
            foreach($ar_judul as $jdl){
                echo '<th>'.$jdl.'</th>';
            }    
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach($ar_pegawai as $b){
            $warna = $no % 2 == 1 ? 'khaki' : 'beige';
        ?>
        <tr bgcolor="<?= $warna; ?>">
            <td><?= $no ?></td>
            <td><?= $b['nip'] ?></td>
            <td><?= $b['nama'] ?></td>
            <td><?= $b['jabatan'] ?></td>
            <td><?= $b['divisi'] ?></td>
            <td><?= $b['agama'] ?></td>
            <?php 
                $pe = $b['jabatan']; 
                $aga = $b['agama']; 
                
                switch ($pe) {
                    case 'Manager': $gk = 20000000; break;
                    case 'Asisten': $gk = 15000000; break;
                    case 'Kabag': $gk = 10000000; break;
                    case 'Staff': $gk = 4000000; break;
                    default: $gk = '';
                }
                
                $tunjangan_jabatan = 0.2 * $gk;
                
                $gaji_kotor = $gk + $tunjangan_jabatan ;
                
                if ($aga == 'Islam' && $gk >= 6000000) {
                    $zakat_profesi = $gk *  0.025;
                } else {
                    $zakat_profesi = 0;
                };
                
                $takeHomePay = $gaji_kotor - $zakat_profesi;
            ?>
            <td><?= $gk ?></td>
            <td><?= $tunjangan_jabatan ?></td>
            <td><?= $gaji_kotor ?></td>
            <td><?= $takeHomePay ?></td>
        </tr>
        <?php
        $no++;
        }
        ?>
    </tbody>
    <tfoot>
    </tfoot>
</table>

<!-- Tugas:

1. Buat array scalar dan associative

2. Tampilkan Populasi Data dari array di atas

3. Populasi data tambahan:

   - Gaji Pokok (Switch Case):

		Manager=>20jt, Asisten=>15jt, Kabag=>10jt, Staff=>4jt

   - Tunjangan Jabatan = 20 % dari Gapok

   - Zakat Profesi (ternary) : Jika muslim dan gaji kotor minimal 6jt, 

     maka zakat 2,5% dari gaji kotor

   - Take Home pay -->