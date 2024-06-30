@extends('layouts.app')

@section('content')
<section id="latihan" class="latihan">
    <div class="container position-relative">

      <div class="row gy-7" data-aos="fade-in">
        <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <br><br>
          <h2>Selamat datang di Halaman Kuis Bahasa Isyarat untuk Pemula!</h2>
          <p><br>Kami mengundang Anda untuk menguji pengetahuan dan kemampuan Anda dalam mengenali huruf, angka, dan kata-kata sehari-hari dalam Bahasa Isyarat Indonesia (BISINDO). Kuis ini dirancang dengan penuh tantangan dan interaktif, terdiri dari serangkaian pertanyaan yang mencakup berbagai aspek dasar dari Bahasa Isyarat.</p>

          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="{{ route('latihan.showQuestions') }}" class="btn-get-started">Mulai Kuis</a>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 latihan-img">
          <img src="{{ asset('assets_user/img/kuis.jpg') }}" class="img-fluid animated" alt="">
        </div>
      </div>

    </div>
</section><!-- End Latihan Section -->
@endsection
