 <!-- Blog Area Start -->
 <section class="roberto-blog-area section-padding-100-0">
     <div class="container">
         <div class="row">
             <!-- Section Heading -->
             <div class="col-12">
                 <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                     <h2>Our Building</h2>
                 </div>
             </div>
         </div>

         <div class="row">
             <!-- Data Gedung -->
             <?php
             //ciptakan object dari class Gedung
             $obj = new Gedung();
             //panggil fungsi menampilkan data Gedung
             $rs = $obj->getAll();
             //looping data gedung
             foreach($rs as $g){
             ?>
             <div class="col-12 col-md-6 col-lg-4">
                 <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                     <a href="#" class="post-thumbnail"><img src="img/bg-img/1.jpg" alt=""></a>
                     <!-- Post Meta -->
                     <div class="post-meta">
                         <a href="#" class="post-date">Jan 02, 2019</a>
                         <a href="#" class="post-catagory"><?= $g['kode'] ?></a>
                     </div>
                     <!-- Post Title -->
                     <a href="#" class="post-title"><?= $g['nama'] ?></a>
                     <p><?= $g['alamat'] ?></p>
                     <a href="index.php?hal=gedung_form_edit&id=<?= $g['id'] ?>" class="btn continue-btn"><i
                             class="fa fa-edit" aria-hidden="true"></i></a>
                 </div>
             </div>
             <?php } ?>
         </div>
     </div>
 </section>
 <!-- Blog Area End -->