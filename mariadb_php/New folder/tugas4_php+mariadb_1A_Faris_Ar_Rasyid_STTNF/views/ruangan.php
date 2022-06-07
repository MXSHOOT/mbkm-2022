<section class="roberto-rooms-area">
    <div class="rooms-slides owl-carousel">
        <!-- Data Ruangan -->
        <?php
        //ciptakan object dari class Ruangan
        $obj = new Ruangan();
        //panggil fungsi menampilkan data Gedung
        $rs = $obj->getAll();
        //looping data gedung
        foreach($rs as $r){
        ?>
        <div class="single-room-slide d-flex align-items-center">
            <!-- Thumbnail -->
            <div class="room-thumbnail h-100 bg-img" style="background-image: url(img/bg-img/<?= $r['foto'] ?>);"></div>

            <!-- Content -->
            <div class="room-content">
                <h2 data-animation="fadeInUp" data-delay="100ms"><?= $r['nama'] ?></h2>
                <h3 data-animation="fadeInUp" data-delay="300ms"><?= $r['status'] ?></h3>
                <ul class="room-feature" data-animation="fadeInUp" data-delay="1000ms">
                    <li><span><i class="fa fa-check"></i> Gedung</span> <span>: <?= $r['nama_gedung'] ?></span></li>
                    <li><span><i class="fa fa-check"></i> Lantai</span> <span>: <?= $r['lantai'] ?></span></li>
                    <li><span><i class="fa fa-check"></i> Fasilitas</span> <span>: <?= $r['nama_fasilitas'] ?></span>
                    </li>
                </ul>
                <a href="index.php?hal=ruangan_detil&id=<?= $r['id'] ?>" class="btn roberto-btn mt-30"
                    data-animation="fadeInUp" data-delay="1000ms">View
                    Details</a>
            </div>
        </div>
        <?php } ?>



    </div>
</section>