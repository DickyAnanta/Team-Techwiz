<div class="card">
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row col-12">
                <div class="col-12 col-md-12 col-lg-4">
                    <h3>User Data</h3>
                    <div class="form-group">
                        <label for="username" class="col-form-label">Username</label>
                        <input type="text" class="form-control form-control-border border-width-2" id="username" name="username" placeholder="Masukkan username tanpa sepasi dan tanpa karakter/simbol  " required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-form-label">Password</label>
                        <input type="password" class="form-control form-control-border border-width-2" id="password" name="password" <?php (!empty($data['username'])) ? 'required' : ''; ?>>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="email" class="form-control form-control-border border-width-2" id="email" name="email" placeholder="Masukkan email dengan benar" required>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <h3>Profile Data</h3>
                    <div class="form-group">
                        <label for="nama" class="col-form-label">Nama</label>
                        <input type="text" class="form-control form-control-border border-width-2" id="nama" name="nama" placeholder="Masukkan nama lenkap. Contoh : Adul Acakadut" required>
                    </div>
                    <div class="form-group">
                        <label for="kelamin" class="col-form-label">Kelamin</label>
                        <input type="text" class="form-control form-control-border border-width-2" id="kelamin" name="kelamin" required>
                    </div>
                    <div class="form-group">
                        <label for="ttl" class="col-form-label">TTL</label>
                        <input type="date" class="form-control form-control-border border-width-2" id="ttl" name="ttl" required>
                    </div>
                    <div class="form-group">
                        <label for="telepon" class="col-form-label">Telepon</label>
                        <input type="number" maxlength="13" class="form-control form-control-border border-width-2" id="telepon" name="telepon" placeholder="62xxx xxxx xxxx" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="col-form-label">Alamat</label>
                        <textarea type="text" class="form-control form-control-border border-width-2" id="alamat" name="alamat" placeholder="Masukkan alamat lengkap. Contoh : Bangsri RW001 RT002, Jepara, Jawa Tengah" rows="3" required></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" style="display:none" id="form-submit"></button>
        </form>
    </div>
</div>