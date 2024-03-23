<div class="card">
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row col-12">
                <div class="col-12 col-md-12 col-lg-4">
                    <h3>Pelanggan</h3>
                    <div class="form-group">
                        <label for="nama" class="col-form-label">Nama</label>
                        <input type="text" class="form-control form-control-border border-width-2" id="nama" name="nama" value="<?= @$data['nama'] ?>" placeholder="Masukkan nama lengkap" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="telepon" class="col-form-label">Telepon</label>
                        <input type="number" class="form-control form-control-border border-width-2" id="telepon" name="telepon" value="<?= @$data['telepon'] ?>" placeholder="Masukkan nomor telepon" required>
                    </div>
                </div>
            </div>
            <button type="submit" style="display:none" id="form-submit"></button>
        </form>
    </div>
</div>