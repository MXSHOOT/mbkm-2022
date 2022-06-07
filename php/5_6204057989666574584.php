<?php
   //  variabel cefine by user
    $namaPegawai = 'Joko Tri Aryanto';

    $agama = 'Islam'; // agama di indonesia
    
    $jabatan = 'Asisten'; // Manager, Asisten, Kabag, Staff
    
    $status = 'Menikah'; // Menikah atau Belum
    
    $jmlAnak = 3;
    
    //Switch Case Jabatan
    switch ($jabatan) {
        case "Manager":
            $gaji = 20000000;
          break;
        case "Asisten":
            $gaji = 15000000;
          break;
        case "Kabag":
            $gaji = 1000000;
          break;
        default:
            $gaji = 4000000;
        }
    //tunjangan jabatan
    $tunjab = $gaji*0.2;
    //if else kondisi 
    if ($status == "Menikah" && $jmlAnak <= 2) $tunga = $gaji * 0.05;
    else if ($status == "Menikah" && $jmlAnak >= 2) $tunga = $gaji * 0.1;
    else  $tunga = 0;
    // Gaji Total
    $gator = $gaji+$tunjab+$tunga;
    // Jumlah Zakat (ternary)

    if ($agama == "Islam" && $gator >= 6000000) {
        $zkt = $gator*0.025;
    } else {
    $zkt = 0;
    }

    //take homepay
    $total = $gator-$zkt;

    ?>
     <h3 align="center">Full Stack Developer - NF.Com</h3>
    <marquee onmouseover="stop()" onmouseout="start()">
        <h1>Joko Tri Aryanto - STT Nurul Fikri - PHP Aritmatika  - Perhitungan Gaji Pegawai  </h1>
    </marquee>
    <center>
    <hr><b>
    <?= $namaPegawai?> </b>
    <br> Agama = <?= $agama?>
    <br> jabatan = <?= $jabatan?>
    <br> status = <?= $status?>
    <br> Jumlah Anak = <?= $jmlAnak?>
    <br> Gaji Pokok = <?= $gaji?>
    <br> Tunjangan Jabatan = <?= $tunjab?>
    <br> Tunjangan Keluarga = <?= $tunga?>
    <br> Total Gaji Kotor = <?= $gator?>
    <br> Total Zakat  = <?= $zkt?>
    <br> Take Home Pay  = <?= $total?>
    </center>





    
    

