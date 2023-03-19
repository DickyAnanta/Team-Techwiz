<section class="metodepembayaran mt-5 mb-5">
    <div class="row">
        <!-- kolom1 -->
        <div class="col-md-7 border rounded p-3 pilihmenu data">
            <h2>Pembayaran</h2>
            <form action="">
                <label class="mb-1 mt-2">Nama</label> <br>
                <input class="form-control" type="text" placeholder="Masukkan Nama">
                <label class="mb-1 mt-2">No Telepon</label> <br>
                <input class="form-control" type="number" placeholder="Masukkan No Telp">

                <h3 class="mt-3 mb-2">Metode Pembayaran</h3>
                <label class="w-100 border p-2 rounded" for="">
                    <input class="mr-2" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    Bayar Di Tempat
                </label>
                <label class="w-100 border p-2 rounded" for="">
                    <input class="mr-2" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    Transfer Bank
                </label>
        </div>
        </form>
        <!-- kolom2 -->
        <div class="col-md-4 offset-md-1 sticky-top">
            <div class="pilihmenu p-0">
                <div class="card p-3 rounded">
                    <div class="card-header p-2 text-center">
                        <h2>Detail Pembayaran</h2>
                    </div>
                    <div class="card-body pb-0 pt-2">
                        <div class="row pt-2">
                            <div class="col-12 mb-2">
                                <p class=" font-weight-bold text-dark">Nama<span class="font-weight-bold float-right">ivan</span></p>
                                <p class=" font-weight-bold text-dark">No Meja<span class="font-weight-bold float-right">01</span></p>
                            </div>
                            <div class="col-12">
                                <p class="mb-0">Nasi Goreng<span class="font-weight-normal float-right">RP 15.000</span></p>
                                <p class="mb-0">Nasi Goreng<span class="font-weight-normal float-right">RP 15.000</span></p>
                            </div>
                            <div class="col-12 pb-2 border-bottom">
                                <p class="font-weight-bold mb-2">Metode Pembayaran <span class="float-right"><img src="../img/bri.png" alt="" style="height: 1.2rem;"></span></p>
                            </div>
                            <div class="col-12 pt-3">
                                <p class="font-weight-bold mb-3">Total Pembayaran<span class="font-weight-bold float-right">RP 30.000</span></p>
                            </div>
                        </div>
                    </div>
                    <div class=" border-top">
                        <a href="/order/pembayaran" class="btn btn-sm btn-success w-100">Bayar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>