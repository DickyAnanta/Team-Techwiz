<section class="nomeja mt-5">
    <div class="container">
        <h3 class="mb-3"><i class="fa fa-angle-left"></i> Nomer Meja</h3>
        <div class="row">
            <?php if (!empty($meja["data"])) : ?>
                <?php foreach ($meja["data"] as $key => $value) : ?>
                    <div class="col-3">
                        <div class="card bg-<?php if ($value["status"] == "Full") {
                                                echo "danger";
                                            } ?>" style="width: 12rem;">
                            <div class="card-body">
                                <h3 class="m-0 mb-2 text-center font-weight-bold"><?= $value["nomor"] ?></h3>
                                <img src="/assets/img/meja.png" class="w-100" alt="">
                                <div class="row">
                                    <div class="col-8">
                                        <p class="m-0">Kapasitas</p>
                                    </div>
                                    <div class="col-4">
                                        <p class=" float-right m-0"><i class='fas fa-user-alt'></i> <?= $value["kapasitas"] ?></p>
                                    </div>
                                </div>
                                <?php if ($value["status"] == "Full") : ?>
                                    <a class="card-link btn btn-sm btn-light mt-3 w-100">
                                        Penuh
                                    </a>
                                <?php endif; ?>
                                <?php if ($value["status"] == "Available") : ?>
                                    <a href="/order/<?= $value["nomor"] ?>" id="meja" class="card-link btn btn-sm btn-success mt-3 w-100">
                                        Pilih
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
</section>