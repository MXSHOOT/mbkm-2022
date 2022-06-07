<?php
    //tangkap request url: index.php?hal=gedung_form_edit&id=3
    $id = $_REQUEST['id'];
    //buat object Gedung
    $obj = new Fasilitas();
    //panggil fungsi untuk mendapatkan data sebuah gedung di modelnya
    $data = $obj->getFasilitas($id);
    ?>
    <!-- Contact Form Area Start -->
    <div class="roberto-contact-form-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h6>Form Ubah <?= $data['nama'] ?></h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Form -->
                    <div class="roberto-contact-form">
                        <form action="fasilitasController.php" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                    <input type="text" name="nama" class="form-control mb-30"
                                        value="<?= $data['nama'] ?>">
                                </div>
                                <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                                    <textarea name="alamat" class="form-control mb-30"><?= $data['keterangan'] ?></textarea>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="100ms">
                                    <button type="submit" name="proses" value="ubah"
                                        class="btn roberto-btn mt-15">Ubah</button>
                                    <!-- secara sembunyi2 kirim ke controller id untuk klausa where id -->
                                    <input type="hidden" name="idx" value="<?= $id ?>">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form Area End -->