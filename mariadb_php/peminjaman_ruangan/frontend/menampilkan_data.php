<?php
require_once 'koneksi_db.php';
//gunakan fungsi PDO
$sql = "SELECT * FROM gedung";
//eksekusi query di atas, lalu ambil hasilnya
$data = $dbh->query($sql);
//print_r($data);exit();
?>
<h2>List Mahasiswa</h2>
<table border="1">
    <tr><th>NO</th><th>NIM</th><th>Kode</th><th>Nama</th><th>Alamat</th></tr>
    <?php
    $no=1;
    foreach ($data as $row){
        echo "<tr>
            <td>$no</td>
            <td>".$row['id']."</td>
            <td>".$row['kode']."</td>
            <td>".$row['nama']."</td>
            <td>".$row['alamat']."</td>
              </tr>";
        $no++;
    }
    ?>
</table>