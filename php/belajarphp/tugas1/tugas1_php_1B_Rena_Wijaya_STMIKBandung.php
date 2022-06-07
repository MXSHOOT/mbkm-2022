<?php

//diketahui

$namaPegawai = 'Ahmad Sopandi';
echo PHP_EOL. "Nama = ". $namaPegawai.PHP_EOL;

$agama = 'Islam'; // agama di indonesia
echo "Agama = ". $agama;

$jabatan = 'Manager'; // Manager, Asisten, Kabag, Staff
echo PHP_EOL."Jabatan = ". $jabatan . PHP_EOL;

$status = 'Menikah'; // Menikah atau Belum
echo "Status = ". $status;

$jmlAnak = 4;
echo PHP_EOL."Jumlah Anak = ". $jmlAnak. PHP_EOL;
echo "---------------------------------------------------".PHP_EOL;

switch ($jabatan) {
	case 'Manager':
        $gaji=20000000;
		echo "Gaji = 20.000.000";
		break;
	case 'Asisten':
        $gaji=15000000;
		echo "Gaji = 15.000.000";
		break;
	case 'Kabag':
        $gaji=10000000;
		echo "Gaji = 10.000.000";
		break;
	case 'Staff':
        $gaji=4000000;
		echo "Gaji = 4.000.000";
		break;
	default:
		echo "Gaji = Jabatan Tidak Ada";
		break;
    }
    
    $tunjangan = $gaji *20/100;
    echo PHP_EOL . "tunjangan anda = " . $tunjangan. PHP_EOL;

    if($jmlAnak <= 2)
    {
        $tunkel = $gaji * 5/100 ;
        echo "tujangan sebesar 5% = ". $tunkel;
         
    }
    elseif ($jmlAnak >= 3)
    {
        $tunkel = $gaji * 10/100 ;
        echo "tujangan sebesar 10% = ". $tunkel;
    }
    else
    {
        echo "TIDAK DAPAT TUNJANGAN KELUARGA ";
    }

    $gaji_ktr=$tunjangan+$tunkel;
    echo PHP_EOL . "Gaji Kotor Sebesar = " . $gaji_ktr . PHP_EOL;

    $zakat=0;
    echo ($gaji_ktr>=6000000) ? "Zakat yang harus di bayarkan = ".$zakat=$gaji_ktr*2.5/100 : "Tidak Perlu Bayar Zakat";

    $total = $gaji + $tunjangan + $tunkel - $zakat ;
    echo PHP_EOL . "TOTAL GAJI YANG DI DAPAT = ".$total;

    /*




6. Tentukan take home pay 


Cetaklah populasi data di atas

*/

?>

