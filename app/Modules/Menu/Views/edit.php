<div class="card">
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row col-12">
                <div class="col-12 col-md-12 col-lg-4">
                    <h3>Menu</h3>
                    <div class="form-group">
                        <label for="title" class="col-form-label">Nama Menu</label>
                        <input type="text" class="form-control form-control-border border-width-2" id="title" name="title" value="<?= @$data['title'] ?>" placeholder="Masukkan nama menu" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="text" class="col-form-label">Deskripsi</label>
                        <textarea type="text" class="form-control form-control-border border-width-2" id="deskripsi" name="deskripsi" value="<?= @$data['deskripsi'] ?>" placeholder="Masukkan deskripsi dengan benar" required><?= @$data['deskripsi'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="gambar" class="col-form-label">Gambar</label>
                        <input type="file" class="form-control form-control-border border-width-2" id="gambar" name="gambar" value="<?= @$data['gambar'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="tipe" class="col-form-label">Tipe</label>
                        <input type="text" class="form-control form-control-border border-width-2" id="tipe" name="tipe" value="<?= @$data['tipe'] ?>" placeholder="Masukkan tipe dengan benar" required>
                    </div>
                    <div class="form-group">
                        <label for="stok" class="col-form-label">Stok</label>
                        <input type="number" class="form-control form-control-border border-width-2" id="stok" name="stok" value="<?= @$data['stok'] ?>" placeholder="Masukkan stok dengan benar" required>
                    </div>
                </div>
            </div>
            <button type="submit" style="display:none" id="form-submit"></button>
        </form>
    </div>
</div>