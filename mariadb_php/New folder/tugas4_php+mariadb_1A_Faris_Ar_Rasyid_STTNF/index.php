<?php
require_once 'koneksi_db.php';
//gunakan fungsi PDO
//$sql = "SELECT * FROM gedung";
//eksekusi query di atas, lalu ambil hasilnya
//$data = $dbh->query($sql);
//print_r($data);exit();
//panggil models
require_once 'models/Gedung.php';
require_once 'models/Fasilitas.php';
require_once 'models/KategoriRuangan.php';
require_once 'models/Ruangan.php';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Title -->
        <title>Aplikasi Peminjaman Ruangan</title>
        <!-- Favicon -->
        <link rel="icon" href="./img/core-img/favicon.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <!-- Preloader -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- /Preloader -->
        <!-- Header Area Start -->
        <?php include_once 'frontend/header.php'; ?>
        <br />
        <!-- Header Area End -->
        <!-----------awal area link internal----------------->
        <?php
        $hal = $_GET['hal'];
        if($hal == 'home'){
            include_once 'frontend/home.php';
        }
        else if(!empty($hal)){
            include_once 'views/'.$hal.'.php';
        }
        else{
            include_once 'frontend/home.php';
        }
        ?>
        <!-----------akhir area link internal----------------->
        <br />
        <!-- Contact Us Area Start -->
        <?php include_once 'frontend/contact.php'; ?>
        <!-- Contact Us Area End -->
        <br />
        <!-- Footer Area Start -->
        <?php include_once 'frontend/footer.php'; ?>
        <!-- Footer Area End -->
        <!-- **** All JS Files ***** -->
        <!-- jQuery 2.2.4 -->
        <script src="js/jquery.min.js"></script>
        <!-- Popper -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- All Plugins -->
        <script src="js/roberto.bundle.js"></script>
        <!-- Active -->
        <script src="js/default-assets/active.js"></script>
    </body>

</html>