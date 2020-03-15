<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>headset" class="btn btn-primary">Kembali</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-header">
                    Form Ubah Data Headset
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_headset" value="<?= $headset['id_headset']; ?>">
                        <div class="form-group">
                            <label for="nama_headset">Nama</label>
                            <input type="text" name="nama_headset" class="form-control" id="nama_headset" value="<?= $headset['nama_headset']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_headset'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" class="form-control" id="harga" value="<?= $headset['harga']; ?>">
                            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="text" name="stok" class="form-control" id="stok" value="<?= $headset['stok']; ?>">
                            <small class="form-text text-danger"><?= form_error('stok'); ?></small>
                        </div>
                        <div class="form-group">
                            <p class="text-left">File Gambar:</p>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input name="gambar" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" value="<?= $headset['gambar']; ?>">
                                    <label class="custom-file-label" for="inputGroupFile01">pilih file</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>