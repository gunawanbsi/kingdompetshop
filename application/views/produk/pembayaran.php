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
                            <h3>Pembayaran</h3>
                            <img src="<?php echo base_url()?>assets/img/logo.png" alt="">
                    </div>
                </div>
<div class="col-right">
    <div class="login-form">
        <div class="btn btn-secondary rounded-pill mb-3">
            <?php $grand_total = 0;
                if ($keranjang = $this->cart->contents())
                {
                    foreach ($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                echo "Total Belanja Anda : Rp. " .number_format($grand_total, 0, ',', '.');
                ?>
        </div>
         <h2>Form Pembayaran</h2>
            <form method="post" action="<?= base_url('user/proses'); ?>">
                <p>
                    <label class="text-pad">Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Masukan Nama Lengkap">
                </p>
                <p>
                    <label class="text-pad">Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Masukan Alamat Lengkap">
                </p>
                <p>
                    <label class="text-pad">Nomor Telepon</label>
                    <input type="text" name="no_telepon" placeholder="Masukan Nomor Telepon Lengkap">
                </p>
                <p>
                    <label class="text-pad">Pengiriman</label>
                    <select class="opsi">
                        <option>JNT</option>
                        <option>TIKI</option>
                        <option>Pos Indonesia</option>
                        <option>Gojek</option>
                        <option>Grab</option>
                    </select>
                </p>
                <p>
                    <label class="text-pad">Pembayaran</label>
                    <select class="opsi">
                        <option>BCA</option>
                        <option>BNI</option>
                        <option>MANDIRI</option>
                        <option>GOPAY</option>
                        <option>OVO</option>
                    </select>
                </p>
                <p>
                    <input class="btn-l" type="submit" value="Pesan" />
                </p>
            </form>
            <?php }
            else {
                echo "Keranjang Belanja Anda Masih Kosong"; 
            } ?>
    </div>
</div>
        </div>