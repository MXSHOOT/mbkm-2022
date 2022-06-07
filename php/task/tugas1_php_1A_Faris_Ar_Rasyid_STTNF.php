<?php
$namaPegawai = 'Ahmad Sopandi';
$agama = 'Islam';
$jabatan = 'Manager';
$status = 'Menikah'; // Menikah atau belum
$jmlAnak = 4;


if ($jabatan == 'Manager') {
  $gaji_pokok = 20000000;
} elseif ($jabatan == 'Asisten') {
    $gaji_pokok = 15000000;
} elseif ($jabatan == 'Kabag') {
    $gaji_pokok = 10000000;
} elseif ($jabatan == 'Staff') {
    $gaji_pokok = 4000000;
} else {
    $gaji_pokok = "Pengangguran";
}

if ($jmlAnak >= 1 && $jmlAnak <= 2) {
    $tunjangan_keluarga = 0.05 * $gaji_pokok;
} elseif ($jmlAnak >= 3 && $jmlAnak <= 5) {
    $tunjangan_keluarga = 0.1 * $gaji_pokok;
} else{
    $tunjangan_keluarga = "Bikin anak";
}

if ($agama == 'Islam' && $gaji_pokok >= 6000000) {
    $zakat_profesi = $gaji_pokok *  0.025;
} else {
    $zakat_profesi = "Tidak ada";
}

$tunjangan_jabatan = 0.2 * $gaji_pokok;

$gaji_kotor = $gaji_pokok + $tunjangan_jabatan + $tunjangan_keluarga;

$takeHomePay = $gaji_kotor - $zakat_profesi;


echo "Biodata
        <br/>Nama : " .$namaPegawai.
        "<br/>Agama : ".$agama.
        "<br/>Jabatan : ".$jabatan.
        "<br/>Status : ".$status.
        "<br/>Jumlah Anak : ".$jmlAnak.
        "<br/><br/><br/>Perhitungan
        <br/>Gaji Pokok : "."Rp ".number_format($gaji_pokok, 0, ",", ".").
        "<br/>Tunjangan Keluarga : "."Rp ".number_format($tunjangan_keluarga, 0, ",", ".").
        "<br/>Tunjangan Jabatan : "."Rp ".number_format($tunjangan_jabatan, 0, ",", ".").
        "<br/>Zakat : "."Rp ".number_format($zakat_profesi, 0, ",", ".").
        "<br/>Gaji Kotor : "."Rp ".number_format($gaji_kotor, 0, ",", ".").
        "<br/>take Home Pay : "."Rp ".number_format($takeHomePay, 0, ",", "."); 
?>
<!-- 
tugas : 
1. tentukan gaji pokok (pakai multi if kondisi)
    Jika manager 20 jt, Asisten : 15 jt, Kabag : 10 jt, Staff : 4 jt
2. tentukan tunjangan jabatan = 20% dari gaji pokok
3. tentukan tunjangan keluarga:
    Jika sudah menikah dan punya anak maksimal 2 = 5% dari gapok
    Jika sudah menikah dan anak antara 3 - 5 = 10% dari gapok
    selain itu belum dapat tunjangan keluarga
4. tentukan gaji kotor 
5. tentukan zakat_profesi
    jika ia muslim dan gaji minimal 6 jt, ada zakat = 2.5 %
    dari gaji kotor, sselain itu tidak ada zakat
6. tentukan take home pay
Cetaklah populasi data di atas
*/ -->