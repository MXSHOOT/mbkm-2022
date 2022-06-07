<html>
 <form method="POST" name="frmpost" action="">
  <table align="center" border="1" cellpadding="0" cellspacing="0"> 
    <tr align="center"><td><h2> <b>Masukan Nilai Kalian</b></h2></td></tr>
    <tr> 
      <td>
      <table width="450" border="0" cellpadding="0" cellspacing="10" align="center">
        <tr>
          <td>Nama</td>
          <td> : </td>
          <td><input name="nama[]" type="text" size="40" /></td>
        </tr>
        <tr>
          <td>Mata Pelajaran</td>
          <td> : </td>
          <td>
            <select name="matpel">
                <option value="IPA">IPA</option>
                <option value="IPS">IPS</option>
                <option value="Matematika">Matematika</option>
                <option value="Fisika">Fisika</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Nilai</td>
          <td> : </td>
          <td><input name="nilai" type="text" size="40" /></td>
        </tr>
        <tr>
          <td   colspan="4" align="center"><input type="submit" name="btnOk" value="Simpan" /></td>
        </tr>
      </table>
      </td>
    </tr>
  </table>
</form>
<center>
<table border="1" cellpadding="2" cellspacing="4">
  <?php
    $nama = $_POST['nama'];
    $matpel = $_POST['matpel'];
    $nilai = $_POST['nilai'];

    $keterangan = ($nilai >= 60) ? 'Lulus' : 'Gagal';
    if($nilai >= 85 && $nilai <= 100) $grade = 'A';
    else if($nilai >= 75 && $nilai < 85) $grade = 'B'; 
    else if($nilai >= 60 && $nilai < 75) $grade = 'C';
    else if($nilai >= 30 && $nilai < 60) $grade = 'D'; 
    else if($nilai >= 0 && $nilai < 30) $grade = 'E';
    else $grade = '';  
    switch ($grade) {
        case 'A': $predikat = 'Memuaskan'; break;
        case 'B': $predikat = 'Bagus'; break;
        case 'C': $predikat = 'Cukup'; break;
        case 'D': $predikat = 'Kurang'; break;
        case 'E': $predikat = 'Buruk'; break;
        default: $predikat = '';
    }

    foreach($nama as $key => $val){
  ?>
  
  <tr>
    <td align="center" colspan="2">
      <?php 
      echo '<b>Hasil Diskusi yang di Inputkan</b><br>';?>   
    </td>
  </tr>
  <tr>
    <td><?php echo 'Nama'?></td>
    <td><?php echo $nama[$key];?></td>
  </tr>
  <tr>
    <td><?php echo 'Mata Pelajaran';?></td>
    <td><?php echo $matpel;?></td>
  </tr>
  <tr>
    <td><?php echo 'Nilai';?></td>
    <td><?php echo $nilai;?></td>
  </tr>
  <tr>
    <td><?php echo 'Kelulusan';?></td>
    <td><?php echo $keterangan;?></td>
  </tr>
  <tr>
    <td><?php echo 'Grade';?></td>
    <td><?php echo $grade;?></td>
  </tr>
  <tr>
    <td><?php echo 'Predikat';?></td>
    <td><?php echo $predikat;?></td>
  </tr>
  <?php 
    }
   ?>
</table>
</center>
</html>

<!-- /*
Buatlah form input nilai dengan element sebagai berikut:
- method form: POST
- input nama, name => nama
- seleksi mata pelajaran, name => matpel
  IPA, IPS, Matematika, Fisika
- input nilai, name => nilai
- tombol simpan, name => simpan
Tugas:
1. Buat Form
2. Tampilkan Populasi Data di atas, jika tombol simpan sudah di klik
3. Populasi data tammbahan:
   - Kelulusan nilai minimal 60 (ternary)  
   - Grade A,B,C,D,E (if multi kondisi)
   - Predikat dari grade (Switch Case)  
*/ -->