<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/adminlte/css/adminlte.min.css">
    <!-- css saya -->
    <link rel="stylesheet" href="/css/masuk.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <a href="/"><i class="fas fa-arrow-left"></i></a>
                <form action="/login/auth" method="post">
                    <img src="/assets/img/loogo.png" alt="">
                    <?php if (session()->getFlashdata('msg')) : ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                    <?php endif; ?>
                    <div class="form-group">
                        <p for="username">Username</p>
                        <input type="text" class="" placeholder="Masukkan username" id="username" name="username" autofocus>
                    </div>
                    <div class="form-group">
                        <p for="password">Password</p>
                        <input type="password" class="" placeholder="masukkan password" id="password" name="password">
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn">Masuk</a></button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/assets/adminlte/js/adminlte.min.js"></script>
</body>

</html>