<!-- Carousel Start -->
<div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?php echo base_url()?>assets/img/kucing.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8 text-start">
                                    <p class="fs-4 text-white">Selamat Datang di Petshop Kami</p>
                                    <h1 class="text-white mb-5 animated slideInRight">Tempat terbaik untuk peliharaan Anda.</h1>
                                    <a href="" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInRight">Lebih Jauh</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?php echo base_url()?>assets/img/dog.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-8 text-end">
                                    <p class="fs-4 text-white">Kingdom Petshop</p>
                                    <h1 class="text-white mb-5 animated slideInRight">Menyediakan berbagai kebutuhan untuk peliharaan Anda</h1>
                                    <a href="" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInLeft">Lebih Jauh</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
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
                            <h5 class="mb-3">Kucing</h4>
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

    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
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

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Team Kami</p>
                <h1 class="mb-5">Kami memiliki 5 Orang Anggota</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded p-4">
                        <img class="img-fluid rounded mb-4" src="<?php echo base_url()?>assets/img/team-1.jpg" alt="">
                        <h5>Ahmad Ibnu Aqil</h5>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded p-4">
                        <img class="img-fluid rounded mb-4" src="<?php echo base_url()?>assets/img/team-2.jpg" alt="">
                        <h5>Raden Muhammad</h5>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded p-4">
                        <img class="img-fluid rounded mb-4" src="<?php echo base_url()?>assets/img/team-3.jpg" alt="">
                        <h5>Siti Fatonah</h5>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded p-4">
                        <img class="img-fluid rounded mb-4" src="<?php echo base_url()?>assets/img/team-3.jpg" alt="">
                        <h5>Reshima Salma Sangadji</h5>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded p-4">
                        <img class="img-fluid rounded mb-4" src="<?php echo base_url()?>assets/img/team-3.jpg" alt="">
                        <h5>Yusi Amalia</h5>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
