<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
            <?php if(validation_errors()){?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors();?>
                </div>
            <?php }?>
            <?= $this->session->flashdata('pesan'); ?>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#HewanBaruModal"><i class="fas fa-file-alt"></i> Tambah Hewan</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAMA HEWAN</th>
                        <th scope="col">JENIS KELAMIN</th>
                        <th scope="col">KATEGORI HEWAN</th>
                        <th scope="col">TANGGAL LAHIR</th>
                        <th scope="col">PILIHAN</th>
                    </tr>
                </thead>
                <tbody>
                <?php $a = 1; 
                foreach ($hewan as $k) { ?>
                <tr>
                    <th scope="row"><?= $a++; ?></th>
                    <td><?= $k['nama_hewan']; ?></td>
                    <td><?= $k['jenis_kelamin']; ?></td>
                    <td><?= $k['kategori_hewan']; ?></td>
                    <td><?= $k['tanggal_lahir']; ?></td>
                    <td>
                        <a href="<?=base_url('admin/editHewan/') . $k['id'];?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                        <a href="<?=base_url('admin/hapusHewan/') . $k['id'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.' '.$k['nama_hewan'];?>?');" class="badge badge-danger"><i class="fas fa-trash"></i>Hapus</a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<!-- Modal Tambah kategori baru-->
<div class="modal fade" id="HewanBaruModal" tabindex="-1" role="dialog" aria-labelledby="HewanBaruModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="=HewanBaruModalLabel">Tambah Data Hewan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url(). 'admin/createHewan'; ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="nama_hewan" id="nama_hewan" placeholder="Masukan Nama Hewan" class="form-control form-control-user">
                    </div>
                    <div class="form-group">
                        <input type="text" name="jenis_kelamin" id="jenis_kelamin" placeholder="Masukan Jenis Kelamin Hewan" class="form-control form-control-user">
                    </div>
                    <div class="form-group">
                        <input type="text" name="kategori_hewan" id="kategori_hewan" placeholder="Masukan Kategori Hewan" class="form-control form-control-user">
                    </div>
                    <div class="form-group">
                        <input type="text" name="tanggal_lahir" id="tanggal_lahir" placeholder="Masukan Tanggal Lahir Hewan" class="form-control form-control-user">
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                            <input type="file" class="form-control form-control-user ms-2" id="image" name="image">
                            <label class="custom-file-label ms-2"for="image">Pilih file</label>
                                    
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
                </div>
<!-- End of Modal Tambah Mneu -->