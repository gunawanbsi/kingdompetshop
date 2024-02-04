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
                        <img src="<?php echo base_url()?>assets/img/logo.png" alt="">
                        <p class="mt-3">
                            Silahkan Login dan Jelajahi Website Kami Tanpa Batas!
                        </p>
                    </div>
                </div>
                <div class="col-right">
                    <div class="login-form">
                        <?= $this->session->flashdata('pesan'); ?>
                        <h2>Login</h2>
                        <form method="post" action="<?= base_url('auth'); ?>">
                            <p>
                                <input type="text" placeholder="Email" value="<?= set_value('email'); ?>" id="email" name="email">
                                <?= form_error('email', '<small class="alert-danger">', '</small>'); ?>
                            </p>
                            <p>
                                <input type="password" placeholder="Password" id="password" name="password">
                                <?= form_error('password', '<small class="alert-danger">', '<small>'); ?>
                            </p>
                            <p>
                                <input class="btn-l" type="submit" value="Masuk" />
                            </p>
                            <p>
                                <a href="<?php echo base_url().'auth/registrasi'?>">Daftar Menjadi Member</a>
                            </p>
                        </form>
                    </div>
                </div>
</div>