<section class="order mb-5">
    <h2 data-aos="fade-down">Pilih Produk</h2>
    <!-- menu -->
    <div class="row menu d-flex justify-content-between" id="makanan">
        <div class="col-md-7">
            <!-- makanan -->
            <div class="konten">
                <h3 class="mt-4" data-aos="fade-down">Makanan</h3>
                <div class="sec" data-aos="fade-down">
                    <?php if (!empty($menu["data"])) : ?>
                        <?php foreach ($menu["data"] as $key => $value) : ?>
                            <?php if (strtoupper($value["tipe"]) == "MAKANAN") : ?>
                                <div class="box shadow-sm" data-aos="fade-down">
                                    <img src="/assets/upload/images/<?= $value["gambar"] ?>" alt="">
                                    <h4 class="mb-2"><?= $value["title"] ?></h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2"><?= idr($value["harga"]) ?><span>Stok <?= $value["stok"] ?></span></p>
                                    <button class="btn btn-sm btn-success tambah-menu" data-menuid="<?= encrypt_url($value["id"]) ?>">Tambah</a>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>

            <!-- minuman -->
            <div class="konten">
                <h3 class="mt-4" data-aos="fade-down">Minuman</h3>
                <div class="sec" data-aos="fade-down">
                    <?php if (!empty($menu["data"])) : ?>
                        <?php foreach ($menu["data"] as $key => $value) : ?>
                            <?php if (strtoupper($value["tipe"]) == "MINUMAN") : ?>
                                <div class="box shadow-sm" data-aos="fade-down">
                                    <img src="/assets/upload/images/<?= $value["gambar"] ?>" alt="">
                                    <h4 class="mb-2"><?= $value["title"] ?></h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2"><?= idr($value["harga"]) ?></p>
                                    <p class="d-flex justify-content-between pl-2 pr-2"><span>Stok <?= $value["stok"] ?></span></p>
                                    <button class="btn btn-sm btn-success tambah-menu" data-menuid="<?= encrypt_url($value["id"]) ?>">Tambah</a>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>

            <!-- cemilan -->
            <div class="konten">
                <h3 class="mt-4" data-aos="fade-down">Camilan</h3>
                <div class="sec" data-aos="fade-down">
                    <?php if (!empty($menu["data"])) : ?>
                        <?php foreach ($menu["data"] as $key => $value) : ?>
                            <?php if (strtoupper($value["tipe"]) == "CAMILAN") : ?>
                                <div class="box shadow-sm" data-aos="fade-down">
                                    <img src="/assets/upload/images/<?= $value["gambar"] ?>" alt="">
                                    <h4 class="mb-2"><?= $value["title"] ?></h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2"><?= idr($value["harga"]) ?></p>
                                    <p class="d-flex justify-content-between pl-2 pr-2"><span>Stok <?= $value["stok"] ?></span></p>
                                    <button class="btn btn-sm btn-success tambah-menu" data-menuid="<?= encrypt_url($value["id"]) ?>">Tambah</button>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- struk -->
        <div class="col-md-4 mt-3 pl-2 pt-5">
            <div class="card struk sticky-top" data-aos="fade-up">
                <div class="card-header">
                    <h3 class="text-center">Pesanan</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-7">
                            <p class="float-left p-0 m-1">Burger Special <span class="text-success">RP25.000</span></p>
                        </div>
                        <div class="col-1">
                            <a href="" class="btn btn-sm text-success">+</a>
                        </div>
                        <div class="col-1">
                            <label for="" class="float-right pt-1">1</label>
                        </div>
                        <div class="col-1">
                            <a href="" class="btn btn-sm text-danger">-</a>
                        </div>
                        <div class="col-2">
                            <a href="" class="btn btn-sm btn-danger float-right"><i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div class="input-group p-0 m-0 ">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Masukkan Catatan">
                            </div>
                        </div>
                    </div>
                    <p>Tidak ada pesanan</p>
                </div>

                <div class="card-footer bg-white border-top text-muted">
                    <div class="row pt-2">
                        <div class="col-6">
                            <h4 class="float-left p-0">Total Pembayaran</h4>
                        </div>
                        <div class="col-6">
                            <h4 class="float-right">Rp 0,00</h4>
                        </div>
                    </div>
                    <a href="/order/metodepembayaran" class="btn btn-success w-100">Lanjutkan Pesanan</a>
                </div>
            </div>
        </div>
    </div>
</section>