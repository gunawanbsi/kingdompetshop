<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown"><?php echo $judul; ?></h1>
        </div>
</div>
<!-- Page Header End -->

<!-- Product Start -->
<div class="container-xxl py-5">
        <div class="container">
            <?= $this->session->flashdata('pesan'); ?>
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Produk Kami</p>
                <h2 class="mb-5">Produk Yang Kami Jual Untuk Peliharaan Kesayangan Anda</h2>
            </div>
            <div class="row gx-4">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="<?php echo base_url()?>assets/img/catfood.jpg" alt="">
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="<?php echo base_url().'user/catFood'?>">Makanan Kucing</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="<?php echo base_url()?>assets/img/dogfood.jpg" alt="">
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="<?php echo base_url().'user/dogFood'?>">Makanan Anjing</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="<?php echo base_url()?>assets/img/treats.jpg" alt="">
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="<?php echo base_url().'user/treats'?>">Treats</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="<?php echo base_url()?>assets/img/toys.jpg" alt="">
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="<?php echo base_url().'user/aksesoris'?>">Aksesoris</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->