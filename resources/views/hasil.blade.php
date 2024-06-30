@extends('layouts.app')

@section('content')
<section id="hasil" class="latihan section-bg py-5">
    <div class="container" data-aos="fade-up">
        <div class="section-title text-center mb-5">
            <h2>Hasil Kuis</h2>
            <p>Berikut adalah hasil kuis Anda. Terima kasih telah berpartisipasi!</p>
        </div>

        <div class="result-container">
            <!-- Display the quiz results here -->
            <div class="card col-md-8 mx-auto shadow-sm mb-4">
                <div class="card-body text-center">
                    <h2>{{ $score }}</h2>
                    <p class="card-text">Jawaban Benar: <strong>{{ $correctAnswers }}/{{ $totalQuestions }}</strong></p>
                    <div class="d-flex justify-content-center mt-4">
                        <a href="{{ route('latihan.showQuestions') }}" class="btn btn-secondary mx-2">Ulangi Kuis</a>
                        <button class="btn btn-primary" id="toggleReview">Lihat Review Jawaban</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Progress Bar -->
        <div class="progress mt-5">
            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: {{ ($score / $totalQuestions) * 100 }}%" aria-valuenow="{{ ($score / $totalQuestions) * 100 }}" aria-valuemin="0" aria-valuemax="100">Skor: {{ ($score / $totalQuestions) * 100 }}%</div>
        </div>
    </div>

    <div id="reviewSection" style="display:none;" class="mt-4">
        <div class="review-container">
        @foreach($results as $index => $result)
                <div class="card col-md-11 mx-auto mb-3 border-{{ $result['is_correct'] ? 'success' : 'danger' }} shadow mb-3">
                    <div class="card-body">
                        <h6 class="card-title">{{ $index + 1 }}. {{ $result['question'] }}</h6>
                        @if ($result['question_image'])
                            <img src="{{ asset('storage/' . $result['question_image']) }}" class="img-fluid mb-3 " alt="Question Image" width="150">
                        @endif
                        <div>
                            @foreach ($result['choices'] as $choice)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q{{ $index + 1 }}" value="{{ $choice }}" disabled {{ $choice == $result['user_answer'] ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        {{ $choice }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-3">
                            @if ($result['is_correct'])
                                <span class="badge bg-success">Jawaban Anda Benar</span>
                            @else
                                <span class="badge bg-danger">Jawaban Anda Salah</span>
                                <p><b>Jawaban yang benar:</b> {{ $result['correct_answer'] }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="text-center mt-4">
                <a href="{{ route('latihan.showQuestions') }}" class="btn btn-primary mx-2">Ulangi Kuis</a>
                <a href="{{ route('home') }}" class="btn btn-secondary mx-2">Kembali ke Home</a>
            </div>
        </div>
    </div>
</section><!-- End Hasil Section -->

<script>
    document.getElementById('toggleReview').addEventListener('click', function() {
        var reviewSection = document.getElementById('reviewSection');
        if (reviewSection.style.display === 'none') {
            reviewSection.style.display = 'block';
        } else {
            reviewSection.style.display = 'none';
        }
    });
</script>
@endsection
