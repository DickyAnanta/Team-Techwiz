<!-- tilt -->
<script type="text/javascript" src="vanilla-tilt.min.js"></script>
<!-- jQuery -->
<script src="/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- sweetalert -->
<script src="/assets/js/sweetalert2.all.min.js"></script>
<!-- aos -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        once: true,
    });
</script>
<!-- AdminLTE App -->
<script src="/assets/adminlte/js/adminlte.min.js"></script>
<!-- scan qr -->
<script src="../assets/js/html5-qrcode.min.js"></script>
<script src="../assets/js/scansaya.js"></script>

<script src="/assets/declar.js"></script>
<script type="text/javascript" src="/assets/js/alert.js"></script>
<script type="text/javascript" src="/assets/js/form.js"></script>
<script type="text/javascript" src="/assets/js/uri_segments.js"></script>
<script type="text/javascript" src="/assets/js/loading.cst.js"></script>

<?php
if (file_exists(str_replace("\\", "/", $rootDir) . "/App/Modules/" . $module . '/jsload.php')) {
    include str_replace("\\", "/", $rootDir) . "/App/Modules/" . $module . '/jsload.php';
}
?>