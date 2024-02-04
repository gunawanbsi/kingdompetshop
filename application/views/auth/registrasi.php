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
                            Bergabunglah Menjadi Bagian dari Kingdom Pet Shop!
                        </p>
                    </div>
                </div>
                <div class="col-right">
                    <div class="login-form">
                        <h2>Registrasi</h2>
                        <form method="post" action="<?= base_url('auth/registrasi'); ?>">
                            <p>
                                <input type="text" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>" id="nama" name="nama">
                                <?= form_error('nama', '<small class="alert-danger">', '</small>'); ?>
                            </p>
                            <p>
                                <input type="text" placeholder="Email" value="<?= set_value('email'); ?>" id="email" name="email">
                                <?= form_error('email', '<small class="alert-danger">', '</small>'); ?>
                            </p>
                            <p>
                                <input type="password" id="passsword1" name="password1" placeholder="Password">
                                <?= form_error('password1', '<small class="danger-text">', '</small>'); ?>
                            </p>
                            <p>
                                <input type="password" id="password2" name="password2" placeholder="Ulangi Password">
                                <?= form_error('password2', '<small class="danger-text">', '</small>'); ?>
                            </p>
                            <p>
                                <input class="btn-l" type="submit" value="Daftar Menjadi Member" />
                            </p>
                            <p align="right">
                                Sudah Menjadi Member? Silahkan <a class="ms-1" href="<?php echo base_url().'auth'?>"> Login</a>
                            </p>
                        </form>
                    </div>
                </div>
</div>