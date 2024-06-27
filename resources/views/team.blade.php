@extends('layouts.app')

@section('content')
    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Tim Kami</h2>
                <p>Tim di balik SignWave terdiri dari sekelompok mahasiswa yang sangat berdedikasi dalam mengembangkan platform ini. Mereka membawa beragam keahlian dan semangat untuk memperluas akses dan pemahaman terhadap bahasa isyarat. Dengan komitmen mereka, SignWave tidak hanya menjadi alat pembelajaran, tetapi juga sebuah inisiatif untuk meningkatkan inklusi sosial dan penghargaan terhadap keberagaman komunikasi di seluruh dunia.</p>
            </div>

            <div class="row gy-4 justify-content-center">
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="member p-3">
                        <img src="{{ asset('assets_user/img/team/team-1.jpg') }}" class="img-fluid" alt="">
                        <h4>Anindya Diva Thalita</h4>
                        <span>H1D022026</span>
                        <div class="social">
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                            <a href=""><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="member p-3">
                        <img src="{{ asset('assets_user/img/team/team-2.jpg') }}" class="img-fluid" alt="">
                        <h4>Athifa Nathania</h4>
                        <span>H1D022031</span>
                        <div class="social">
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                            <a href=""><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="member p-3">
                        <img src="{{ asset('assets_user/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                        <h4>Eka Belandini</h4>
                        <span>H1D022002</span>
                        <div class="social">
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                            <a href=""><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <!-- Repeat for other team members -->
            </div>
        </div>
    </section><!-- End Our Team Section -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>
@endsection
