<!-- jQuery -->
<script src="/assets/plugins/jquery/jquery.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/adminlte/js/adminlte.min.js"></script>
<!-- sweetalert -->
<script src="/assets/js/sweetalert2.all.min.js"></script>
<!-- tilt -->
<script type="text/javascript" src="/assets/plugins/tilt-js/vanilla-tilt.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- aos -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script type="text/javascript">
    AOS.init();
</script>
<!-- Js date range picker -->
<script type="text/javascript" src="/assets/plugins/daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="/assets/plugins/daterangepicker/daterangepicker.js"></script>

<script src="/assets/declar.js"></script>
<script type="text/javascript" src="/assets/js/alert.js"></script>
<script type="text/javascript" src="/assets/js/form.js"></script>
<script type="text/javascript" src="/assets/js/uri_segments.js"></script>
<script type="text/javascript" src="/assets/js/loading.cst.js"></script>

<script type="text/javascript" src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script type="text/javascript" src="/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script type="text/javascript" src="/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script type="text/javascript" src="/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script type="text/javascript" src="/assets/js/table.cst.js"></script>

<?php
if (file_exists(str_replace("\\", "/", $rootDir) . "/App/Modules/" . $module . '/jsload.php')) {
    include str_replace("\\", "/", $rootDir) . "/App/Modules/" . $module . '/jsload.php';
}
?>