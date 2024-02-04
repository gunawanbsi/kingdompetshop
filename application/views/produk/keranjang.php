<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown"><?php echo $judul; ?></h1>
        </div>
</div>
<!-- Page Header End -->

<table class="table table-striped table-hover">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Produk</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Harga</th>
        <th scope="col">Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1;
        foreach ($this->cart->contents() as $items) : ?>
        <tr>
            <th scope="row"><?php echo $no++?></th>
            <td><?php echo $items['name'] ?></td>
            <td><?php echo $items['qty'] ?></td>
            <td>Rp. <?php echo number_format($items['price'], 0, ',', '.') ?></td>
            <td>Rp. <?php echo number_format($items['subtotal'], 0, ',', '.') ?></td>
        </tr>
        <?php endforeach ?>
        <tr>
            <td colspan="3"></td>
            <td align="center"> Jumlah Total : </td>
            <td>Rp. <?php echo number_format($this->cart->total(), 0, ',', '.') ?></td>
        </tr>
    </tbody>
    <a href = "<?php echo base_url('user/hapusKeranjang') ?>" class="btn btn-danger rounded-pill ms-5"> Hapus Keranjang </a>
    <a href = "<?php echo base_url('user/produk') ?>" class="btn btn-secondary rounded-pill ms-3"> Lanjutkan Belanja </a>
    <a href = "<?php echo base_url('user/pembayaran') ?>" class="btn btn-success rounded-pill ms-3"> Pembayaran </a>
</table>