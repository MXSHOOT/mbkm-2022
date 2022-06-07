<!DOCTYPE html>
<html>

    <head>
        <title>Belajar Memproses Form</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" />
    </head>

    <body>
        <div class="alert alert-primary" role="alert">
            <h3>Form Belanja</h3>
            <form method="GET" action="latihan4.php">
                <div class=" form-group row">
                    <label class="col-3 col-form-label" for="nama">Pelanggan</label>
                    <div class="col-9">
                        <input id="nama" name="nama" placeholder="Nama Pelanggan" type="text" required="required"
                            class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="produk" class="col-3 col-form-label">Produk</label>
                    <div class="col-9">
                        <select id="produk" name="produk" required="required" class="custom-select">
                            <option value="TV">TV</option>
                            <option value="AC">AC</option>
                            <option value="Kulkas">Kulkas</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-3 col-form-label">Jumlah</label>
                    <div class="col-9">
                        <input id="jumlah" name="jumlah" placeholder="Jumlah Beli" type="text" required="required"
                            class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-3 col-9">
                        <input name="beli" type="submit" class="btn btn-primary" value="Beli" />
                    </div>
                </div>
            </form>
        </div>
        <?php 
        //proses form dengan method GET
        $pelanggan = $_GET['nama'];
        $produk = $_GET['produk'];
        $jumlah = $_GET['jumlah'];
        $tombol = $_GET['beli'];
        //tentukan harga satuan
        switch($produk){
            case 'TV': $harga = 3000000; break;
            case 'AC': $harga = 4000000; break;
            case 'Kulkas': $harga = 5000000; break;
            default: $harga = 0;
        }
        $harga_kotor = $harga * $jumlah; //harga kotor
        //diskon
        if($produk == "Kulkas" && $jumlah >= 3) $diskon = 0.2 * $harga_kotor;
        else if($produk == "AC" && $jumlah >= 3) $diskon = 0.1 * $harga_kotor;
        else $diskon = 0.05 * $harga_kotor;
        $ppn = 0.1 * ($harga_kotor - $diskon); //ppn
        $harga_bayar = ($harga_kotor - $diskon) + $ppn; //harga bayar
        //populasi ditampilkan jika tombol sudah disubmit
        if(!empty($tombol)){
        ?>
        <div class=" alert alert-success" role="alert">
            Nama Pelanggan :<?= $pelanggan ?>
            <br />Produk Pilihan :<?= $produk ?>
            <br />Harga Produk : Rp. <?= number_format($harga, 2, ',', '.') ?>
            <br />Jumlah Beli :<?= $jumlah ?>
            <br />Harga Kotor : Rp. <?= number_format($harga_kotor, 0, ',', '.') ?>
            <br />Diskon : Rp. <?= number_format($diskon, 0, ',', '.') ?>
            <br />PPN : Rp. <?= number_format($ppn, 0, ',', '.') ?>
            <br />Harga Bayar : Rp. <?= number_format($harga_bayar, 0, ',', '.') ?>
        </div>
        <?php } ?>

    </body>

    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</html>