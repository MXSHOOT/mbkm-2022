<?php
//array scalar
$b1 = ['kode'=>'a1', 'buah'=>'Apel', 'harga'=>25000];
$b2 = ['kode'=>'a2', 'buah'=>'Anggur', 'harga'=>45000];
$b3 = ['kode'=>'b1', 'buah'=>'Belimbing', 'harga'=>15000];
$b4 = ['kode'=>'b2', 'buah'=>'Bangkuang', 'harga'=>10000];
$b5 = ['kode'=>'c1', 'buah'=>'Cerry', 'harga'=>35000];

//array associative
$buah2an = [$b1, $b2, $b3, $b4, $b5];

//array scalar
$ar_judul = ['No','Kode','Buah','Harga'];
?>
<h3 align="center">Daftar Buah</h3>
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
        foreach($buah2an as $b){
            $warna = $no % 2 == 1 ? 'khaki' : 'beige';
        ?>
        <tr bgcolor="<?= $warna; ?>">
            <td><?= $no ?></td>
            <td><?= $b['kode'] ?></td>
            <td><?= $b['buah'] ?></td>
            <td><?= $b['harga'] ?></td>
        </tr>
        <?php
        $no++;
        }
        ?>
    </tbody>
    <tfoot>
        <?php
        $hrg = array_column($buah2an, 'harga'); 
        $buah = array_column($buah2an, 'buah'); 
        $max = max($hrg);
        $min = min($hrg);
        $total = array_sum($hrg);
        $jumlah = count($buah);
        $rata2 = $total/$jumlah;
        //print_r($max); die();
        
        $aggregrat = [
            'Harga Total' => $total,
            'Harga Tertinggi' => $max,
            'Harga Terendah' => $min,
            'Harga Rata-Rata'=> $rata2,
            'Jumlah Buah' => $jumlah,
        ];
        //cetak 
        foreach($aggregrat as $ket => $agg){ 
        
        ?>
        <tr bgcolor="gold">
            <th colspan="3"><?= $ket ?></th>
            <th><?= $agg ?></th>
        </tr>
        <?php } ?>
    </tfoot>
</table>