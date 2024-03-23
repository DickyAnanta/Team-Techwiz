<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Top Navigation</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- css saya -->
    <link rel="stylesheet" href="../user/siredig.css">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">



        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <img src="../img/loogo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">

                    <!-- Right navbar links -->
                    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                        <!-- Left navbar links -->
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="bar dropdown-toggle">Admin</a>
                                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                    <li><a href="daftarpengguna.php" class="dropdown-item">List User</a></li>
                                    <li><a href="formuser.php" class="dropdown-item">Form User</a></li>

                                    <li class="dropdown-divider"></li>

                                    <li><a href="daftarmenu_view.php" class="dropdown-item">List Menu</a></li>
                                    <li><a href="formmenu.php" class="dropdown-item">Form Menu</a></li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="../index.php" class="bar">Keluar</a>
                            </li>
                        </ul>
                </div>
        </nav>
        <!-- /.navbar -->

        <section class="pesananadmin mt-3">
            <div class="container">
                <!-- menu -->
                <div class="row">
                    <div class="col-6">
                        <h3>Dashboard</h3>
                    </div>
                    <div class="col-6">
                        <a href="meja.php" class="ml-3 float-right"><i class="fas fa-clipboard mb-4 text-success" style='font-size:22px'></i></a>
                        <a href="" class=" float-right"><i class="fas fa-cash-register mb-5 text-success" style='font-size:22px'></i></a>
                    </div>
                </div>


                <!-- TABLE: LATEST ORDERS -->
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead class="bg-success">
                                    <tr>
                                        <th>No Meja</th>
                                        <th>Nama</th>
                                        <th>Item</th>
                                        <th>Tanggal</th>
                                        <th>Harga</th>
                                        <th>Catatan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Ivan</td>
                                        <td>Nasi Goreng</td>
                                        <td>10 maret</td>
                                        <td class="text-success">RP 20.000</td>
                                        <td>pedas</td>
                                        <td><a href="pesananadmin2.php" class="rounded-pill pl-3 pr-3 btn-sm btn-warning text-white">Proses</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.card-body -->
                </div>
        </section>
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- REQUIRED SCRIPTS -->
    <!-- tilt -->
    <script type="text/javascript" src="vanilla-tilt.min.js"></script>
    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
</body>

</html>