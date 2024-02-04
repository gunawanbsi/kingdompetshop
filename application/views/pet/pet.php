<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown"><?php echo $judul; ?></h1>
        </div>
</div>
<!-- Page Header End -->

<div class="container-xxl py-5">
        <div class="container">
            <?= $this->session->flashdata('pesan'); ?>
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Hewan Kami</p>
                <h1 class="mb-5">Hewan yang berada di Petshop Kingdom</h1>
            </div>
            <div class="row gy-5 gx-4 ms-5">
                <div class="col-lg-5 col-md-6 pt-5 ms-5 pl-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="<?php echo base_url()?>assets/img/kucing1.jpg" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="<?php echo base_url()?>assets/img/kucing1.jpg" alt="">
                            </div>
                            <h5 class="mb-3">Kucing</h5>
                            <p class="mb-4">Kami memiliki Kucing yang siap untuk di Adopsi. Terdapat Kucing ras bersertifikat dan Kucing biasa
                                yang kami selamatkan dari luar.
                            </p>
                            <a class="btn btn-square rounded-circle" href="<?php echo base_url().'user/dataCat'?>"><i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="<?php echo base_url()?>assets/img/dog1.jpg" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="<?php echo base_url()?>assets/img/dog1.jpg" alt="">
                            </div>
                            <h5 class="mb-3">Anjing</h5>
                            <p class="mb-4">Kami memiliki Anjing yang siap untuk di Adopsi. Terdapat Anjing ras bersertifikat dan Anjing biasa
                                yang kami selamatkan dari luar.</p>
                            <a class="btn btn-square rounded-circle" href="<?php echo base_url().'user/dataDog'?>"><i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->