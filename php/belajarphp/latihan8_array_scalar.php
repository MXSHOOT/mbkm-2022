<form>
    Tanggal Lahir:<br />
    <select name="tanggal">
        <option value="">-- Pilih Tanggal --</option>
        <?php
        for($tgl=1; $tgl <= 31; $tgl++){
        ?>
        <option value="<?= $tgl ?>"><?= $tgl ?></option>
        <?php } ?>
    </select>

    <select name="bulan">
        <option value="">-- Pilih Bulan --</option>
        <?php
        $ar_bln = [1=>'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des'];
        foreach($ar_bln as $id => $bln){
        ?>
        <option value="<?= $id ?>"><?= $bln ?></option>
        <?php 
        } 
        ?>
    </select>

    <select name="tahun">
        <option value="">-- Pilih Tahun --</option>
        <?php
        $thn_now = date('Y'); //2022
        $thn_min = $thn_now - 17; //2005
        $thn_max = $thn_now - 35; //1987
        while($thn_min >= $thn_max){
        ?>
        <option value="<?= $thn_min ?>"><?= $thn_min ?></option>
        <?php 
        $thn_min--;
        }
         ?>
    </select>

    <select name="tahun2">
        <option value="">-- Pilih Tahun2 --</option>
        <?php
        $thn_now = date('Y'); //2022
        $thn_min = $thn_now - 17; //2005
        $thn_max = $thn_now - 35; //1987
        while($thn_max <= $thn_min){
        ?>
        <option value="<?= $thn_max ?>"><?= $thn_max ?></option>
        <?php 
        $thn_max++;
        }
         ?>
    </select>
</form>