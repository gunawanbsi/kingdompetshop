<div class="container-fluid">
    <h3> Ubah Data Hewan </h3>
    <?php foreach($hewan as $b) : ?>
                <form method="post" action="<?php echo base_url(). 'admin/ubahHewan'?>">
                    <div class="form-group mb-2">
                        <label>Nama Hewan</label>
                        <input type="text" name="nama_hewan" class="form-control" value="<?php echo $b->nama_hewan ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label>Jenis Kelamin</label>
                        <input type="hidden" name="id" class="form-control" value="<?php echo $b->id ?>">
                        <input type="text" name="jenis_kelamin" class="form-control" value="<?php echo $b->jenis_kelamin ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label>ID Species</label>
                        <input type="text" name="kategori_hewan" class="form-control" value="<?php echo $b->kategori_hewan ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label>Tanggal Lahir</label>
                        <input type="text" name="tanggal_lahir" class="form-control" value="<?php echo $b->tanggal_lahir ?>">
                    </div>
                    
                    <button type="submit" class="btn btn-primary"> Simpan </button>
                    <button class="btn btn-dark" onclick="window.history.go(-1)"> Kembali </button>
                </form>
            <?php endforeach ?>
</div>