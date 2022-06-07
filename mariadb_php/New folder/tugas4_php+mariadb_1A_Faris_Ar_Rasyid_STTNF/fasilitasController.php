<?php
require_once 'koneksi_db.php';
require_once 'models/Fasilitas.php';
//1. tangkap request dari form
$nama = $_POST['nama'];
$ket = $_POST['keterangan'];
$tombol = $_POST['proses']; //tangkap tombol
//2. masukkan ke data array
$data = [
  $nama, // ? 1
  $ket  // ? 2
];
//3. ciptakan object dari class Fasilitas
$obj = new Fasilitas();
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
header('location:index.php?hal=fasilitas');