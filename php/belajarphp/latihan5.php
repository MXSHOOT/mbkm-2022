<h3 align="center">Daftar Pegawai</h3>
<table border="0" align="center" cellpadding="10" cellspacing="0">
    <thead>
        <tr bgcolor="tomato">
            <th>No. </th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for($no = 1; $no <= 100; $no++){
            //warni-warni
            $warna = $no % 2 == 0 ? 'greenyellow' : 'yellowgreen';
        ?>
        <tr bgcolor="<?= $warna ?>">
            <td><?= $no ?></td>
            <td>Pegawai <?= $no ?></td>
            <td>Komplek Situ Indah No. <?= $no ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>