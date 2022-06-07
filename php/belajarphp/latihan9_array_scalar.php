<?php
//diketahui
$ar_nilai = [
  'Budi' => 70,
  'Siti' => 90,
  'Bedu' => 59,
  'Ahmad' => 100,
  'Jhon' => 80,
  'Alex' => 30  
];

$ar_judul = ['No','Nama','Nilai','Keterangan','Grade','Predikat'];
?>
<h3 align="center">Daftar Nilai Siswa</h3>
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
        foreach($ar_nilai as $nama => $nilai){
            $warna = $no % 2 == 1 ? 'khaki' : 'beige';
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
        <tr bgcolor="<?= $warna ?>">
            <td><?= $no ?></td>
            <td><?= $nama ?></td>
            <td><?= $nilai ?></td>
            <td><?= $keterangan ?></td>
            <td><?= $grade ?></td>
            <td><?= $predikat ?></td>
        </tr>
        <?php
        $no++;
        }
        ?>
    </tbody>
    <tfoot>
        <?php
        $max = max($ar_nilai);
        $min = min($ar_nilai);
        $total = array_sum($ar_nilai);
        $jumlah = count($ar_nilai);
        $rata2 = $total/$jumlah;
        //print_r($rata2); die();
        
        $aggregrat = [
            'Nilai Tertinggi' => $max,
            'Nilai Terendah' => $min,
            'Nilai Rata-Rata'=> $rata2,
            'Jumlah Siswa' => $jumlah,
        ];
        //cetak 
        foreach($aggregrat as $ket => $agg){ 
        ?>
        <tr bgcolor="gold">
            <th colspan="5"><?= $ket ?></th>
            <th><?= $agg ?></th>
        </tr>
        <?php } ?>
    </tfoot>
</table>