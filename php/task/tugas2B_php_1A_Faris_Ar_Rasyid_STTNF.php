<html>
 <form method="POST" name="frmpost" action="">
  <table align="center" border="1" cellpadding="0" cellspacing="0"> 
    <tr align="center"><td><h2> <b>Masukan Data Kalian</b></h2></td></tr>
    <tr> 
      <td>
      <table width="450" border="0" cellpadding="0" cellspacing="10" align="center">
        <tr>
          <td>Nama</td>
          <td> : </td>
          <td><input name="nama[]" type="text" size="40" /></td>
        </tr>
        <tr>
          <td>Pekerjaan</td>
          <td>:</td>
          <td>
            <select name="pekerjaan">
              <option value="">-- Pilih Pekerjaan --</option>
              <?php
              for($pk=1; $pk <= 10; $pk++){
              ?>
              <option value="<?= $pk ?>">Pekerjaan <?= $pk ?></option>
              <?php } ?>
            </select>
          </td>
        </tr>
        <tr>
          <td>Hobby</td>
          <td>:</td>
          <td>
              <?php
              $hb = 1;
              while($hb <= 10){
              ?>
              <input type="radio" name="hobby" value="<?= $hb ?>"><label for="<?= $hb ?>">Hobby <?= $hb ?></label>
              
              <?php 
              $hb++;
              } 
              ?>
          </td>
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
  $tgl = $_POST['tgl'];
  $jk = $_POST['jk'];
  $hobi = $_POST['hobi'];
  $pekerja = $_POST['pekerjaan'];
  $hobby = $_POST['hobby'];

  foreach($nama as $key => $val){
  ?>
  
  <tr>
    <td align="center" colspan="2">
      <?php 
      echo '<b>Hasil Data yang sudah di Inputkan</b><br>';?>   
    </td>
  </tr>
  <tr>
    <td><?php echo 'Nama'?></td>
    <td><?php echo $nama[$key];?></td>
  </tr>
  <tr>
    <td><?php echo 'Pekerja';?></td>
    <td><?php echo 'Pekerja '.$pekerja;?></td>
  </tr>
  <tr>
    <td><?php echo 'Hobby';?></td>
    <td><?php echo 'Hobby '.$hobby;?></td>
  </tr>
  <?php 
    }
   ?>
</table>
</center>
</html>

<!-- /*
Buatlah form data diri dengan element sebagai berikut:
- method form: POST
- input nama, name => nama
- seleksi pekerjaan (select option), name => pekerjaan
  looping for jenis pekerjaan : pekerjaan1 s/d pekerjaan 10
- Hobby (radio button), name => hobby
  looping while hobby1 s/d hobby10
- tombol simpan, name => simpan
Tugas:
1. Buat Form
2. Tampilkan Populasi Data di atas dalam bentuk tabel, jika tombol simpan sudah di klik
3. Tabel dicetak dalam bentuk kolom
   | Nama | Pekerjaan | Hobby |
*/ -->

