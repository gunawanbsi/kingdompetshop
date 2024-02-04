<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown"><?php echo $judul; ?></h1>
        </div>
</div>
<!-- Page Header End -->

<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Hewan Kami</p>
                <h1 class="mb-5">Hewan yang berada di Petshop Kingdom</h1>
            </div>
            <div class="row gy-5 gx-4 ms-5">
                <?php foreach ($hewan as $h) : ?>
                <div class="col-lg-5 col-md-6 pt-5 ms-5 pl-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="<?php echo base_url().'/assets/img/upload/'.$h->image ?>" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="<?php echo base_url().'/assets/img/upload/'.$h->image ?>" alt="">
                            </div>
                            <h5 class="mb-3"><?php echo "Nama Hewan : "; echo $h->nama_hewan ?></h5 >
                            <p> <?php echo "Jenis Kelamin : "; echo $h->jenis_kelamin ?> </p>
                            <p> <?php echo "Kategori Hewan : "; echo $h->kategori_hewan ?> </p>
                            <p> <?php echo "Tanggal Lahir : "; echo $h->tanggal_lahir?> </p>
                            <a class="btn btn-secondary rounded-pill py-3 px-5" href="<?php echo base_url().'user/adopsi'?>"> Adopsi </a>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
</div>