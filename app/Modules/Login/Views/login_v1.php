<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="/assets/img/icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/login.css">
    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>
    <div class="container">
        <div class="login-box">
            <img src="/assets/img/loogo.png" data-aos="fade-down" alt="" class="mx-auto">
            <form action="/login/auth" method="post">
                <h2 class="mb-3" data-aos="fade-right" class="text-center">Login</h2>
                <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif; ?>
                <div class="form-group mb-1" data-aos="fade-right" data-aos-delay="100">
                    <label for="username">Username</label>
                    <input type="text" placeholder="Masukkan Username" class="form-control" id="username" name="username" autofocus </div>
                    <div class="form-group" data-aos="fade-right" data-aos-delay="200">
                        <label for="password">Password</label>
                        <input type="password" placeholder="Masukkan Password" class="form-control" name="password" id="password">
                    </div>
                    <button type="submit" data-aos="fade-right" data-aos-delay="300" class="btn btn-success w-100">Masuk</button>
                    <a href="/berandauser" data-aos="fade-right" data-aos-delay="400" class="btn btn-warning mt-2 w-100 text-white">Kembali Ke Beranda</a>
            </form>
        </div>
    </div>
    </div>


    <!-- aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script type="text/javascript">
        AOS.init({
            once: true,
        });
    </script>
</body>

</html>