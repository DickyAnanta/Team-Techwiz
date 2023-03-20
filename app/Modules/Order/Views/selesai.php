<section class="selesai mb-5">
    <div class="row">
        <div class="card text-center mx-auto shadow">
            <div class="card-body " data-aos="zoom-up">
                <i class="fas fa-check rounded-circle text-success" data-aos="zoom-up"></i>
                <h2 class="text-success">Pembayaran Berhasil</h2>
                <p class="mb-3 text-success font-weight-normal">Pesanan sedang di proses</p>

                <div class="row text-left p-1 bg-light border-bottom">
                    <div class="col-4">
                        <p class="p-0 m-0 ">No Meja :</p>
                    </div>
                    <div class="col-8">
                        <p class="p-0 m-0  float-right"><?= @$meja["nomor"] ?></p>
                    </div>
                    <div class="col-4">
                        <p class="p-0 m-0 ">Nama :</p>
                    </div>
                    <div class="col-8">
                        <p class="p-0 m-0  float-right"><?= @$pelanggan["nama"] ?></p>
                    </div>
                </div>

                <div class="row text-left p-1 bg-light border-bottom">
                    <div class="col-12">
                        <p class="text-center p-0 m-0 ">Pesanan</p>
                    </div>
                    <?php
                    $sub_total = 0;
                    ?>
                    <?php if (!empty($detailed_pesanan["data"])) : ?>
                        <?php foreach ($detailed_pesanan["data"] as $key => $value) : ?>
                            <div class="col-6">
                                <p class="m-0 p-0"><?= $value["title"]; ?></p>
                            </div>
                            <div class="col-6">
                                <p class="m-0 p-0 float-right text-dark"><?= idr($value["harga"]) ?></p>
                            </div>
                            <?php $sub_total = $sub_total + $value["harga"]; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

                <div class="row rounded text-left p-1 bg-light border-bottom">
                    <div class="col-6">
                        <p class=" p-0 m-0">Sub Total</p>
                    </div>
                    <div class="col-6">
                        <p class=" float-right p-0 m-0"><?= idr($sub_total); ?></p>
                    </div>
                    <div class="col-6">
                        <p class=" p-0 m-0">Diskon</p>
                    </div>
                    <div class="col-6">
                        <p class=" float-right p-0 m-0">0</p>
                    </div>
                </div>

                <div class="row rounded text-left p-1 bg-light border-bottom">
                    <div class="col-6">
                        <p class=" p-0 m-0">Total</p>
                    </div>
                    <div class="col-6">
                        <p class=" float-right p-0 m-0"><?= idr(@$struk["total"]) ?></p>
                    </div>
                </div>

                <div class="row rounded p-1 bg-light">
                    <div class="col-12 mt-2">
                        <p class=" text-center"><?= date("l, d F Y H:i:s", strtotime($struk["created_at"])) ?></p>
                    </div>
                </div>
                <p class="mt-3 text-success">Terimakasih telah order di Siredig</p>
                <a href="/beranda" class="btn btn-sm btn-success w-100">Kembali Ke Beranda</a>
            </div>
        </div>
    </div>
</section>