<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/public/assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/public/assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/public/assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/public/assets/admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/public/assets/admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/public/assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/public/assets/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/public/assets/admin/plugins/summernote/summernote-bs4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="/public/assets/admin/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="/public/assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="/public/assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/public/assets/admin/dist/css/custom.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@include('layouts.admin.header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        @yield('main')
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
@include('layouts.admin.footer')
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/public/assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/public/assets/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/public/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
{{-- <script src="/public/assets/admin/plugins/chart.js/Chart.min.js"></script> --}}
<!-- Sparkline -->
{{-- <script src="/public/assets/admin/plugins/sparklines/sparkline.js"></script> --}}
<!-- JQVMap -->
{{-- <script src="/public/assets/admin/plugins/jqvmap/jquery.vmap.min.js"></script> --}}
{{-- <script src="/public/assets/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> --}}
<!-- jQuery Knob Chart -->
{{-- <script src="/public/assets/admin/plugins/jquery-knob/jquery.knob.min.js"></script> --}}
<!-- daterangepicker -->
<script src="/public/assets/admin/plugins/select2/js/select2.full.min.js"></script>
<script src="/public/assets/admin/plugins/moment/moment.min.js"></script>
<script src="/public/assets/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/public/assets/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/public/assets/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/public/assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/public/assets/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/public/assets/admin/dist/js/demo.js"></script>
<!-- DataTables  & Plugins -->
<script src="/public/assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/public/assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/public/assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/public/assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/public/assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/public/assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<!-- bs-custom-file-input -->
<script src="/public/assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.6/dist/sweetalert2.all.min.js" integrity="sha256-jI91e7SOUXp23P/7pDnwTwij8eGScCTVERrN5qY+wgw=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.17.1/ckeditor.js" integrity="sha512-VXEKi5eNc7ECuyIueuledlqeUWiJ7hcxBe9fnsCiVzeZ0XwJxAPemnq01/LBIBnp3i0szhvKNd9Us7fqNPsRmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- <script src="/public/assets/admin/dist/js/pages/dashboard.js"></script> --}}
<script src="/public/assets/admin/dist/js/custom.js"></script>
@yield('custom-script')
</body>
</html>
