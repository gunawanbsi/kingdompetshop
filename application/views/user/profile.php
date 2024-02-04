<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown"><?php echo $judul; ?></h1>
        </div>
</div>
<!-- Page Header End -->

<div class="wrapper login-3">
            <div class="container row ms-5 mt-5 mb-5">
                <div class="col-left">
                    <div class="login-text">
                        <span class="img-profile">
                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="">
                        </span>
                        <p class="mt-3">
                            <?php echo $judul; ?>
                        </p>
                    </div>
                </div>
                <div class="col-right">
                    <div class="login-form" style="margin-top: 5rem;">
                        <?= $this->session->flashdata('pesan'); ?>
                        <h2><?= $user['nama']; ?></h2><br>
                            <p>Email : <?= $user['email']; ?></p><br>
                            <p>Jadi member sejak: <br><b><?= date('d F Y', $user['tanggal_input']); ?></b></p>
                            <br>
                            <a href="<?= base_url('user/ubahprofil'); ?>"class="btn btn-secondary rounded-pill py-3 px-5"> Ubah Profil</a>
                    </div>
                </div>
</div>