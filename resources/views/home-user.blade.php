<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sign Wave - Beranda</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/signwave-no-text.png" rel="icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor_user/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor_user/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor_user/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor_user/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor_user/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body>
@include('layout.navbar-user')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2><span>Sign Wave</span></h2>
          <p>Platform <b>Sign Wave</b> adalah sebuah sistem berbasis web yang dirancang untuk membantu orang-orang dalam mempelajari dan berkomunikasi menggunakan Bahasa Isyarat Indonesia (BISINDO). Platform ini dirancang untuk memudahkan komunikasi antara orang yang mendengar (teman dengar) dan orang dengan keterbatasan pendengaran (teman tuli) melalui berbagai fitur interaktif yang mendukung pembelajaran Bahasa Isyarat.</p>
        </div>
        <div class="col-lg-5 order-1" style="margin-left:100px;">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="Sign Wave" data-aos="zoom-out" data-aos-delay="100" width="80%">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-layout-text-window-reverse"></i></div>
              <h4 class="title"><a href="home-user#kamus" class="stretched-link">Kamus Bahasa</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-card-list"></i></div>
              <h4 class="title"><a href="home-user#latihan" class="stretched-link">Latihan</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-journal-text"></i></div>
              <h4 class="title"><a href="home-user#artikel" class="stretched-link">Artikel</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-envelope"></i></div>
              <h4 class="title"><a href="home-user#feedback" class="stretched-link">Feedback</a></h4>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">


    <!-- ======= Feedback Section ======= -->
    <section id="feedback" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Feedback</h2>
          <p>Kami menghargai setiap masukan dan saran dari Anda untuk meningkatkan aplikasi Sign Wave. Mohon berikan pendapat Anda mengenai pengalaman menggunakan aplikasi ini, serta saran yang dapat membantu kami dalam pengembangan lebih lanjut. Terima kasih atas partisipasi Anda!</p>
        </div>
        <div class="row gx-lg-0 gy-4">
          @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
          <div class="col-lg-4">
            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Sign Wave</h4>
                  <p>Universitas Jenderal Soedirman</p>
                </div>
              </div><!-- End Info Item -->
            </div>
          </div>
          <div class="col-lg-8">
            <form action="{{ route('home-user') }}" method="post" role="form" class="php-email-form">
              @csrf
              <div class="form-group">
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Anda (opsional)">
              </div>
              <div class="form-group mt-3">
                  <textarea class="form-control" name="isi" rows="7" placeholder="Masukkan komentar Anda mengenai Web ini" required></textarea>
              </div>
              <div class="my-3">
                  <div class="loading">Memuat</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Feedback Anda telah terkirim. Terima kasih!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim Feedback</button></div>
          </form>
          </div><!-- End Feedback Form -->
        </div>
      </div>
    </section><!-- End Feedback Section -->

  </main><!-- End #main -->

@include('layout.footer-user')
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor_user/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor_user/aos/aos.js"></script>
  <script src="assets/vendor_user/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor_user/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor_user/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor_user/isotope-layout/isotope.pkgd.min.js"></script>
  <!-- <script src="assets/vendor_user/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/user.js"></script>
  

</body>

</html>