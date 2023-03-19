<section class="order mb-5">
    <h2 data-aos="fade-down">Pilih Produk</h2>

    <!-- modal metpem -->
    <div class="modal" tabindex="-1" id="metode-pembayaran">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Pemayaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label class="mb-1 mt-2">Nama</label> <br>
                    <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama">
                    <label class="mb-1 mt-2">No Telepon</label> <br>
                    <input class="form-control" type="number" name="tlp" placeholder="Masukkan No Telp">

                    <h3 class="mt-3 mb-2">Metode Pembayaran</h3>
                    <label class="w-100 border p-2 rounded" for="">
                        <input class="mr-2" type="radio" name="metodepembayaran" id="metodepembayaran2" value="transfer" checked>
                        Transfer Bank
                    </label>
                    <label class="w-100 border p-2 rounded" for="">
                        <input class="mr-2" type="radio" name="metodepembayaran" id="metodepembayaran1" value="kasir">
                        Ke Kasir
                    </label>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-block btn-success" id="lanjut-order2">Lanjutkan Pembayaran</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="5000" id="modal-pembayaran">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pemayaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row pt-2">
                        <div class="col-12 mb-2">
                            <p class=" font-weight-bold text-dark">Nama<span class="font-weight-bold float-right" id="nama"></span></p>
                            <p class=" font-weight-bold text-dark">No Meja<span class="font-weight-bold float-right" id="no-meja"></span></p>
                        </div>
                        <div class="col-12" id="list-menu">
                        </div>
                        <div class="col-12 pb-2 border-bottom">
                            <p class=" font-weight-bold text-dark">Metode Pembayaran<span class="font-weight-bold float-right" id="pembayaran"></span></p>
                        </div>
                        <div class="col-12 pt-3">
                            <p class="font-weight-bold mb-3">Total Pembayaran<span class="font-weight-bold float-right" id="total-pembayaran"></span></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-block btn-success" id="lanjut-order3">Lanjutkan Pembayaran</button>
                </div>
            </div>
        </div>
    </div>

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
                <div class="card-body" id="detailed-order-list">

                </div>

                <div class="card-footer bg-white border-top text-muted">
                    <div class="row pt-2">
                        <div class="col-6">
                            <h4 class="float-left p-0">Total Pembayaran</h4>
                        </div>
                        <div class="col-6">
                            <h4 class="float-right" id="total-all-order">Rp 0,00</h4>
                        </div>
                    </div>
                    <button href="/order/metodepembayaran" class="btn btn-success w-100" id="lanjut-order1">Lanjutkan Pesanan</button>
                </div>
            </div>
        </div>
    </div>
</section>