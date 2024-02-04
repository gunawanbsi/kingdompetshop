<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown"><?php echo $judul; ?></h1>
        </div>
</div>
<!-- Page Header End -->

<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Makanan Kucing</p>
                <h2 class="mb-5">Produk Makanan Kucing Yang Kami Jual Untuk Peliharaan Kesayangan Anda</h2>
            </div>
            <div class="row gx-4">
                <?php foreach ($produk as $k) : ?>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="<?php echo base_url().'/assets/img/upload/'.$k->image ?>" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h5><?php echo $k->produk ?></h5>
                            <p><?php echo $k->keterangan ?></p>
                            <p> Rp. <?php echo number_format($k->harga, 0, ',', '.') ?></p>
                        </div>
                        <?php echo anchor('user/keranjang/' .$k->id, '<div class="btn btn-secondary rounded-pill mb-3 ms-5">Tambah ke Keranjang</div>') ?>
                    </div>
                </div> 
                <?php endforeach ?>
            </div>
        </div>
</div>