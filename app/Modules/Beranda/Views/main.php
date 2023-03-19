<section class="beranda">
    <!-- header -->
    <div class="row header mt-2 p-4 bg-light rounded">
        <div class="col mt-3" data-aos="fade-up" data-aos-delay="300">
            <h1><span>FRESH</span> FOOD</h1>
            <h2>&EAT FOOD</h2>
            <p><span>Eat good, live good, and eat good.</span><br>
                Nek mangan gausah miker<br> dunyo, marai ga nikmat.</p>
            <a href="" data-toggle="modal" data-target="#modal-qr-camera" class="btn btn-sm bg-success shadow">Scan To Order</a>
        </div>
        <div class="col" data-aos="fade-up" data-aos-delay="300">
            <img src="/assets/img/Group 100.png" alt="">
        </div>
    </div>

    <!-- modal -->
    <div class="modal" id="modal-qr-camera" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Scan To Order</h5>
                    <button type="button" id="tombol" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <main>
                        <div id="reader"></div>
                        <div id="result"></div>
                    </main>
                </div>
            </div>
        </div>
    </div>

    <!-- detail produk -->
    <div class="modal" tabindex="-1" id="produk">
        <div class="modal-dialog">
            <div class="modal-content bg-light rounded">
                <div class="modal-body p-4">
                    <div class="row">
                        <div class="col-1">
                            <a href="index.php"><i class="fa fa-arrow-left bg-white p-2 font-weight-bold rounded-circle" aria-hidden="true"></i></a><br>
                        </div>
                        <div class="col-5">
                            <img src="" alt="" class="mr-3">
                        </div>
                        <div class="col-6">
                            <h3>Burger Special</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore architecto nemo voluptatibus. Neque cum adipisci laboriosam distinctio fuga, iste fugiat!</p>
                            <label for="">RP 30.000 </label><br>
                            <a href="" class="btn btn-sm btn-success float-right">Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row menu">
        <div class="col-12">
            <!-- paket -->
            <div class="konten mt-5">
                <h3 class="mt-2">Rekomendasi <span class="float-right"><a class="text-success" href="user/menu.php">Lihat Semua<i class="ml-2 fas fa-chevron-right"></i>
                        </a></span></h3>
                <div class="sec">
                    <div class="box border border-light text-left bg-light" data-aos="flip-left">
                        <img src="/assets/upload/images/Paket1.png" alt="">
                        <h4>Paket 1</h4><span class="float-right link p-0 border"><a href="" data-toggle="modal" data-target="#produk" class="btn"><i class="fas fa-pizza-slice text-white"></a></i></span>
                        <p class="d-flex justify-content-between mb-2">Paket</p>
                        <a class="font-weight-bold color" href="" data-toggle="modal" data-target="#produk">RP30.000</a>
                    </div>
                    <div class="box border border-light text-left bg-light" data-aos="flip-left">
                        <img src="/assets/upload/images/Paket1.png" alt="">
                        <h4>Paket 1</h4><span class="float-right link p-0 border"><a href="" data-toggle="modal" data-target="#produk" class="btn"><i class="fas fa-pizza-slice text-white"></a></i></span>
                        <p class="d-flex justify-content-between mb-2">Paket</p>
                        <a class="font-weight-bold color" href="" data-toggle="modal" data-target="#produk">RP30.000</a>
                    </div>
                    <div class="box border border-light text-left bg-light" data-aos="flip-left">
                        <img src="/assets/upload/images/Paket1.png" alt="">
                        <h4>Paket 1</h4><span class="float-right link p-0 border"><a href="" data-toggle="modal" data-target="#produk" class="btn"><i class="fas fa-pizza-slice text-white"></a></i></span>
                        <p class="d-flex justify-content-between mb-2">Paket</p>
                        <a class="font-weight-bold color" href="" data-toggle="modal" data-target="#produk">RP30.000</a>
                    </div>
                    <div class="box border border-light text-left bg-light" data-aos="flip-left" data-aos-delay="100">
                        <img src="/assets/upload/images/Paket2.png" alt="">
                        <h4>Paket 2</h4><span class="float-right link p-0 border"><a href="" data-toggle="modal" data-target="#produk" class="btn"><i class="fas fa-pizza-slice text-white"></a></i></span>
                        <p class="d-flex justify-content-between mb-2">Paket</p>
                        <a class="font-weight-bold color" href="" data-toggle="modal" data-target="#produk">RP30.000</a>
                    </div>
                    <div class="box border border-light text-left bg-light" data-aos="flip-left" data-aos-delay="200">
                        <img src="/assets/upload/images/paket3.png" alt="">
                        <h4>Paket 3</h4><span class="float-right link p-0 border"><a href="" data-toggle="modal" data-target="#produk" class="btn"><i class="fas fa-pizza-slice text-white"></a></i></span>
                        <p class="d-flex justify-content-between mb-2">Paket</p>
                        <a class="font-weight-bold color" href="" data-toggle="modal" data-target="#produk">RP30.000</a>
                    </div>
                </div>
            </div>

            <!-- jumbroton -->
            <div class="jumbotron bg-white box mt-5 p-3">
                <div class="row">
                    <div class="col" data-aos="fade-up">
                        <img style="width: 300px;" src="/assets/img/burgerspesialview.png" alt="">
                    </div>
                    <div class="col pt-3" data-aos="fade-up">
                        <h2>Pilih Makanan Favoritmu</h2>
                        <p class="pt-4 pb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non, accusantium sint laboriosam repellendus quod blanditiis dolore ipsa tempore eius ut.</p>
                        <a class="btn btn-sm btn-success shadow" href="">Pilih Menu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>