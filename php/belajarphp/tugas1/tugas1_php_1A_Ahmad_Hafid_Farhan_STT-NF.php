<?php
$namaPegawai = 'Ahmad Sopandi';

$agama = 'Islam';

$jabatan = 'Manager';

$status = 'Belum';

$jmlAnak = 0;

$jabatan = "Manager";
switch ($jabatan)
{
    case "Manager":
        $jml=20000000;
        echo $jml;
        break;
    case "Asisten":
        $jmlk="15000000;
        echo $jml;
        break;
    case "Kabag":
        $jmlk=10000000;
        echo $jml;
        break;
    case "Staff":
        $jmlk=4000000;
        echo $jml;
        break;
}

$jabatan = array ("Manager", "Asisten", "Kabag", "Staff");

foreach ($jabatan as $x) 
{
    echo "$x";
    echo "<br";
}


?>