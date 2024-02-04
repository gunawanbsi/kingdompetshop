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
                        <?= form_open_multipart('user/ubahprofil'); ?>
                        <span class="img-profile">
                            <h3>Foto</h3>
                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="">
                            <div class="custom-file mt-3">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Pilih file</label>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="col-right">
                    <div class="login-form" style="margin-top: 5rem;">
                            <p>
                                <label for="email" class="text-pad">Email</label>
                                <input type="text" value="<?= $user['email']; ?>" id="email" name="email" readonly>
                            </p>
                            <p>
                                <label for="nama" class="text-pad">Nama Lengkap</label>
                                <input type="text" value="<?= $user['nama']; ?>" id="nama" name="nama">
                                <?= form_error('nama', '<small class="alert-danger">', '</small>'); ?>
                            </p>
                            <p>
                                <input class="btn-l" type="submit" value="Ubah Profile" />
                            </p>
                            <p>
                                <input class="btn-l" value="Kembali" onclick="window.history.go(-1)" style="text-align: center;">
                            </p>
                    </div>
                </div>
</div>