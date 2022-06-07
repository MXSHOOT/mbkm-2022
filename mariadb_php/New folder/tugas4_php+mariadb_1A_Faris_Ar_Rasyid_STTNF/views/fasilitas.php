<div class="row section-padding-100-0">
    <!-- Section Heading -->
    <div class="col-12">
        <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
            <h2>Fasilitas Ruangan</h2>
        </div>
    </div>
</div>


<div class="roberto-service-area mt-20">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="service-content d-flex align-items-center justify-content-between">


                    <?php
             //ciptakan object dari class Gedung
             $obj = new Fasilitas();
             //panggil fungsi menampilkan data Gedung
             $rs = $obj->getAll();
             //looping data gedung
             foreach($rs as $g){
             ?>
                    <!-- Single Service Area -->
                    <div class="single-service--area mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <img src="img/core-img/icon-<?= $g['id'] ?>.png" alt="">
                        <h5><?= $g['nama'] ?></h5>
                        <p><?= $g['keterangan'] ?></p>
                        <a href="index.php?hal=fasilitas_detil&id=<?= $g['id'] ?>" class="btn roberto-btn mt-30"
                    data-animation="fadeInUp" data-delay="1000ms">View
                    Details</a>
                    <a href="index.php?hal=fasilitas_form_edit&id=<?= $g['id'] ?>" class="btn continue-btn"><i
                             class="fa fa-edit" aria-hidden="true"></i></a>
                    </div>
                    
                    <?php } ?>

                </div>
            </div>
            <div class="col-12 text-center wow fadeInUp" data-wow-delay="100ms">
                <a href="index.php?hal=fasilitas_form" class="btn roberto-btn">Tambah</a>
            </div>
        </div>
    </div>
</div>
<!-- Service Area End -->