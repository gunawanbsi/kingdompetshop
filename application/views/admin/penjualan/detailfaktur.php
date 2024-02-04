<div class="container-fluid">
            <?= $this->session->flashdata('pesan'); ?>
            <p class="ms-5">Detail Nomor Faktur : <?php echo $faktur->id ?></p>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID BARANG</th>
                        <th scope="col">NAMA PRODUK</th>
                        <th scope="col">JUMLAH PESANAN</th>
                        <th scope="col">HARGA SATUAN</th>
                        <th scope="col">SUBTOTAL</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                            $total = 0;
                            foreach ($det as $f) :
                                $subtotal = $f->jumlah * $f->harga;
                                $total += $subtotal ?>
                <tr>
                    <td><?php echo $f->id_barang; ?></td>
                    <td><?php echo $f->nama_barang; ?></td>
                    <td><?php echo $f->jumlah ?></td>
                    <td>Rp. <?php echo number_format($f->harga, 0, ',', '.') ?></td>
                    <td>Rp. <?php echo number_format($subtotal, 0, ',', '.') ?></td>
                </tr>
                <?php endforeach ?>
                <tr>
                    <td colspan="4" align="center">Total Harga</td>
                    <td>Rp. <?php echo number_format($total, 0, ',', '.') ?></td>
                </tr>
                <tr>
                    <td colspan="5"><a href="<?php echo base_url('admin/faktur') ?>"><div class="btn btn-sm btn-primary">Kembali</div></a></td>
                </tr>
                </tbody>
            </table>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->