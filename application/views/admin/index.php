<!-- Begin Page Content -->
<div class="container-fluid">
 <!-- row ux-->
 <div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2 bg-primary">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-md font-weight-bold text-white text-uppercase mb-1">Jumlah User</div>
                        <div class="h1 mb-0 font-weight-bold text-white"><?=$this->ModelUser->getUserWhere(['role_id' => 2])->num_rows(); ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('admin/user'); ?>"><i class="fas fa-users fa-3x text-danger"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2 bg-warning">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Jumlah Hewan</div>
                            <div class="h1 mb-0 font-weight-bold text-white">
                                <?=$this->ModelHewan->getHewan('id')->num_rows(); ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('admin/pet'); ?>"><i class="fas fa-dog fa-3x text-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2 bg-danger">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Produk</div>
                            <div class="h1 mb-0 font-weight-bold text-white">
                                <?=$this->ModelProduk->getProduk('id')->num_rows(); ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('admin/produk'); ?>"><i class="fas fa-shopping-cart fa-3x text-success"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2 bg-success">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-md font-weight-bold text-white text-uppercase mb-1">Jumlah Kategori Hewan</div>
                        <div class="h1 mb-0 font-weight-bold text-white">
                            <?=$this->ModelHewan->getKategori('id')->num_rows(); ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('admin/kategori'); ?>"><i class="fas fa-cat fa-3x text-warning"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- end row ux-->
        <!-- row table-->
            <div class="table-responsive table-bordered ml-auto mr-auto mt-2">
                <div class="page-header">
                    <span class="fas fa-dog text-primary mt-2 "> Data Pet</span>
                    <a class="text-danger" href="<?php echo base_url('admin/pet'); ?>"><i class="fas fa-search mt-2 float-right">Tampilkan</i></a>
                </div>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Hewan</th>
                            <th>Jenis Kelamin</th>
                            <th>Kategori Hewan</th>
                            <th>Tanggal Lahir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($hewan as $a) { ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $a['nama_hewan']; ?></td>
                            <td><?= $a['jenis_kelamin']; ?></td>
                            <td><?= $a['kategori_hewan']; ?></td>
                            <td><?= $a['tanggal_lahir']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            
    </div>
<!-- end of row table-->
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
                        </div>