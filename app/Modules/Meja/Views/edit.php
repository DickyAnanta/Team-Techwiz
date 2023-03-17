<div class="card">
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row col-12">
                <div class="col-12 col-md-12 col-lg-4">
                    <h3>Meja</h3>
                    <div class="form-group">
                        <label for="nomor" class="col-form-label">Nomor Meja</label>
                        <input type="text" class="form-control form-control-border border-width-2" id="nomor" name="nomor" value="<?= @$data['nomor'] ?>" placeholder="Masukkan nomor meja" style="text-transform: uppercase;" required autofocus>
                    </div>
                </div>
            </div>
            <button type="submit" style="display:none" id="form-submit"></button>
        </form>
    </div>
</div>