<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/admin/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/admin/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/admin/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/admin/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/admin/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/admin/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/admin/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

@include('components.admin.navbar')
@include('components.admin.sidebar')

<main id="main">
    @yield('content')
</main>

@include('components.admin.footer')


  <!-- Vendor JS Files -->
  <script src="assets/vendor/admin/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/admin/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/admin/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/admin/echarts/echarts.min.js"></script>
  <script src="assets/vendor/admin/quill/quill.js"></script>
  <script src="assets/vendor/admin/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/admin/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/admin/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/admin/main.js"></script>

</body>

</html>