<?php
require_once 'koneksi_db.php';
require_once 'models/Gedung.php';
//1. tangkap request dari form
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tombol = $_POST['proses']; //tangkap tombol
//2. masukkan ke data array
$data = [
  $kode, // ? 1  
  $nama, // ? 2
  $alamat  // ? 3
];
//3. ciptakan object dari class Fasilitas
$obj = new Gedung();
//logik untuk tombol
switch ($tombol) {
    case 'simpan': $obj->simpan($data); break;
    case 'ubah':
        $data[]=$_POST['idx']; // ? ke 4 where id = ? yg didapat dari hidden field form edit
        $obj->ubah($data);
        break;    
    default:# code...break;
}

//4. landing page
header('location:index.php?hal=gedung');