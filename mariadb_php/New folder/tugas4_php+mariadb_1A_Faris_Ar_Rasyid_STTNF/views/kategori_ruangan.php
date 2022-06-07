 <!-- Blog Area Start -->
 <section class="roberto-blog-area section-padding-100-0">
     <div class="container">
         <div class="row">
             <!-- Section Heading -->
             <div class="col-12">
                 <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                     <h2>Kategori Ruangan</h2>
                 </div>
             </div>
         </div>

         <div class="row">
             <!-- Data Gedung -->
             <?php
             //ciptakan object dari class Gedung
             $obj = new KategoriRuangan();
             //panggil fungsi menampilkan data Gedung
             $rs = $obj->getAll();
             //looping data gedung
             foreach($rs as $g){
             ?>
             <div class="col-12 col-md-6 col-lg-4">
                 <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                     <a href="#" class="post-thumbnail"><img src="img/bg-img/<?= $g['id'] ?>.jpg" alt=""></a>
                     <!-- Post Meta -->

                     <!-- Post Title -->
                     <a href="#" class="post-title"><?= $g['nama'] ?></a>
                     <p><?= $g['keterangan'] ?></p>
                     <a href="index.php?hal=home" class="btn continue-btn"><i class="fa fa-long-arrow-right"
                             aria-hidden="true"></i></a>
                 </div>
             </div>
             <?php } ?>
         </div>
     </div>
 </section>