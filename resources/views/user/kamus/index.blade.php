<!DOCTYPE html>


 <!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio sections-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Kamus</h2>
      <p>Selamat datang di kamus SignWave, tempat belajar penuh warna dan kegembiraan! Kamus ini memiliki tiga kategori utama yaitu huruf, angka, dan kosa kata. Setiap entri dilengkapi interpretasi visual menarik, contoh penggunaan jelas, dan panduan pengucapan mudah dipahami. Nikmati pengalaman belajar interaktif dan tingkatkan kemampuan bahasa isyarat Anda. Jelajahi keajaiban bahasa isyarat bersama SignWave!</p>
    </div>

    <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

      <div>
        <ul class="portfolio-flters">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-portfolio">Huruf</li>
          <li data-filter=".filter-product">Angka</li>
          <li data-filter=".filter-branding">Kosa Kata</li>
        </ul><!-- End Portfolio Filters -->
      </div>

      <div class="row gy-4 portfolio-container">

            <div class="col-xl-4 col-md-6 portfolio-item filter-portfolio">
                <div class="portfolio-wrap">
                    <img src="assets/img/kamus/huruf_rmv.png" class="img-fluid" alt=""></a>
                    <div class="portfolio-info">
                    <h4><a href="portfolio-details.html" title="More Details">Huruf</a></h4>
                    <p>Tersedia 26 huruf mulai dari A hingga Z</p>
                    </div>
                </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <img src="assets/img/kamus/angka_rmv.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Angka</a></h4>
                  <p>Angka dari 0 hingga 1.000.000.000</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <img src="assets/img/kamus/kata_rmv.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Kosa Kata</a></h4>
                  <p>Beragam kosa kata dasar</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

        <!-- Menampilkan Huruf -->
        @foreach ($kamus_signwave as $kamus)
          @if ($kamus->id <= 26)
            <div class="col-xl-4 col-md-6 portfolio-item filter-portfolio">
              <div class="portfolio-wrap">
                <img src="assets/img/kamus/{{ $kamus->gambar }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">{{ $kamus->kata }}</a></h4>
                  <p>{{ $kamus->deskripsi }}</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
          @endif
        @endforeach

        <!-- Menampilkan Angka -->
        @foreach ($kamus_signwave as $kamus)
          @if ($kamus->id >= 27 && $kamus->id <= 60)
            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <img src="{{ asset('assets/img/kamus/' . $kamus->gambar) }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">{{ $kamus->kata }}</a></h4>
                  <p>{{ $kamus->deskripsi }}</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
          @endif
        @endforeach

         <!-- Menampilkan Kata -->
         @foreach ($kamus_signwave as $kamus)
          @if ($kamus->id >= 61)
            <div div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <img src="{{ asset('assets/img/kamus/' . $kamus->gambar) }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">{{ $kamus->kata }}</a></h4>
                  <p>{{ $kamus->deskripsi }}</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
          @endif
        @endforeach
      </div><!-- End Portfolio Container -->
    </div>
  </div>
</section><!-- End Portfolio Section -->


</html>
