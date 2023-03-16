<!DOCTYPE html>
<html lang="en">
<?php
$rootDir = dirname(FCPATH);
$router = service('router');
$module = class_basename($router->controllerName());
$method = $router->methodName();
// if (file_exists(str_replace("\\", "/", $rootDir) . "/css/" . $link1 . ".php")) {
//     echo view('template/css/' . $link1);str_replace("\\", "/", $rootDir) .
// }
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/assets/img/loogo.png">
    <title>
        <?php
        if (!empty($page['title'])) {
            echo $page['title'];
        } else {
            echo 'SIREDIG - ' . ucfirst($module) . ' ' . ucfirst($method);
        }
        ?>
    </title>

    <?php include 'section/cssload.php'; ?>

</head>

<body class="hold-transition layout-top-nav">
    <div id="alert-data" title="<?= @$alert["title"]; ?>" type="<?= @$alert["type"]; ?>" message="<?= @$alert["message"]; ?>" cobtn="<?= @$alert["cobtn"]; ?>" redirect="<?= @$alert["redirect"]; ?>" redirect-to="<?= @$alert["redirect_to"]; ?>"></div>
    <div class="wrapper">
        <!-- Navbar -->
        <?php include 'section/navbar.php'; ?>
        <!-- /.navbar -->
    </div>
    <div class="loading-layout" style="background-color: #00000057;display: none;">
        <div class="loading">
            <img style="width:100px" src="/assets/system-images/app-loading.svg" width="80">
        </div>
    </div>
    <tbody>
        <div class="content-wrapper" style="padding-top: 1px;">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-3 mt-3 justify-content-end">
                        <?php
                        if (file_exists(str_replace("\\", "/", $rootDir) . "/App/Modules/" . $module . '/Menubar.php')) {
                            include str_replace("\\", "/", $rootDir) . "/App/Modules/" . $module . '/Menubar.php';
                        }
                        ?>
                    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content menu">
                <hr>
                <div class="row">
                    <div class="col-12">
                        <?php
                        if (file_exists(str_replace("\\", "/", $rootDir) . "/App/Modules/" . $module . '/Views//' . $method . '.php')) {
                            include str_replace("\\", "/", $rootDir) . "/App/Modules/" . $module . '/Views//' . $method . '.php';
                        } else {
                            echo '<p><i>View ' . $method . ' cannot exists!</i></p>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </tbody>

    <?php include 'section/jsload.php'; ?>

    <?php
    // if (file_exists(str_replace("\\", "/", $rootDir) . "/js/" . $link1 . ".php")) {
    //     echo view('template/css/' . $link1);
    // }
    ?>
</body>

</html>

</html>