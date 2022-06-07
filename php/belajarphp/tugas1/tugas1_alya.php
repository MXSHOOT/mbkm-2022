<!DOCTYPE html>
<html lang="en">
<head>
   <title>Tugas 1 PHP</title>
   <style>
   body{
      background:#87CEFA;
      color:#F8F8FF;
      
   }
   .container{
      background:#008B8B;
      border: 30px solid 	#E6E6FA;
      font-family:comic sans ms;
      text-align:justify;
      width: 30%;
      padding:40px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
     

   </style>
</head>
<body>
   <div class="container">

<?php
//diketahui
$namaPegawai = 'Ahmad Sopandi';
$agama = 'Islam'; // agama di indonesia
$jabatan = 'Kabag'; // Manager, Asisten, Kabag, Staff
$status = 'Menikah'; // Menikah atau Belum
$jmlAnak = 5;

function rupiah ($angka){
   $hasil_rupiah ="Rp.".
   number_format ($angka,2,',','.');
   return $hasil_rupiah;
}

/*
1. tentukan gaji pokok (switch case)
Jika Manager = 20jt, Asisten = 15jt, Kabag = 10jt, Staff = 4jt
*/
switch ($jabatan)
{
    case 'Manager':$gapok = 20000000;break;
    case 'Asisten':$gapok = 15000000;break;
    case 'Kabag' :$gapok =10000000;break;
    case 'Staff' :$gapok =4000000;break;
    default:  0;
}

// 2. tentukan tunjangan jabatan = 20% dari gaji pokok
$tunjab= 0.2 * $gapok;


/*
3. tentukan tunjangan keluarga (if multi kondisi):
   jika sudah menikah dan anak maksimal 2 = 5% dari gapok
   jika sudah menikah dan anak antara 3 - 5 = 10% dari gapok
   selain itu belum dapat tunjangan keluarga
    */
if ($status =='Menikah' && $jmlAnak <=2){
   $tunkel = 0.05 * $gapok;
}else if ($status == 'Menikah' && $jmlAnak >=3 && $jmlAnak <=5) {
   $tunkel =0.1 * $gapok ;
}else{
 $tunkel = 0;
}

//4. Tentukan gaji kotor
$gator = $gapok + $tunjab + $tunkel ;

/*
5. tentukan zakat_profesi (ternary)
   jika ia muslim dan gaji kotor minimal 6 juta, ada zakat = 2.5% dari gaji kotor. Selain itu tidak ada zakat
*/
$zakat =  $agama == 'Islam' && $gator> 6000000 ? $zakat= 0.025 * $gator :0 ;

// 6. Tentukan take home pay
$takehp = $gator- $zakat;

//cetak
?>
Nama Pegawai : <?= $namaPegawai?>
<br/> Agama :<?=$agama?>
<br/> Jabatan : <?=$jabatan?>
<br/> Status : <?=$status?>
<br/> Jumlah Anak : <?=$jmlAnak?>
<br/> Tunjangan Jabatan :<?= rupiah ($tunjab)?>
<br/> Tunjangan Keluarga : <?= rupiah($tunkel)?>
<br/> Gaji Pokok :<?=rupiah ($gapok)?>
<br/> Zakat : <?=rupiah($zakat)?>
<br/> Take Home Pay : <?=rupiah ($takehp)?>

</div>
</body>
</html>

