<!DOCTYPE html>


    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Artikel</h2>
          <p>Selamat datang di artikel SignWave, tempat untuk mengeksplorasi beragam artikel yang mengangkat dunia bahasa isyarat secara mendalam dan menyenangkan! Temukan cerita inspiratif, tips praktis, dan berita terkini seputar bahasa isyarat yang akan membawa kita lebih dekat dengan komunitas ini. Ayo, mari jelajahi bersama dan tingkatkan pemahaman serta apresiasi terhadap keindahan bahasa isyarat!</p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
          @foreach ($artikel_signwave as $artikel)
          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-newspaper"></i>
              </div>
              <h3>{{ $artikel->judul_artikel }}</h3>
              <p>{{ $artikel->konten }}</p>
              <a href="{{ $artikel->link }}" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->
        @endforeach
      </div>
    </section><!-- End Our Services Section -->

</html>
