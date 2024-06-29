<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sign Wave</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/user/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/user/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/user/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/user/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/user/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/user/main.css" rel="stylesheet">
</head>
<body>

@include('components.user.navbar')

<main id="main">
    @yield('content')
</main>

@include('components.user.footer')

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/user/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
