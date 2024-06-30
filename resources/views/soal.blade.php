@extends('layouts.app')

@section('content')
<section id="latihan" class="latihan section-bg py-5">
    <div class="container" data-aos="fade-up">
        <div class="section-title text-center mb-5">
            <h2>Latihan Bahasa Isyarat</h2>
            <p>Pilih jawaban terbaik untuk setiap pertanyaan di bawah ini. Beberapa pertanyaan dilengkapi dengan gambar menarik. Bacalah dengan seksama sebelum menjawab. Jika Anda siap, mari kita mulai! Selamat mengerjakan dan semoga sukses!</p>
        </div>

        <div class="quiz-container">
            <form id="quiz-form" action="{{ route('latihan.submitQuiz') }}" method="POST" onsubmit="return validateQuiz()">
                @csrf
                @foreach ($pertanyaans as $index => $pertanyaan)
                    <div class="card col-md-12 mx-auto mb-3">
                        <div class="card-body">
                            <h6 class="card-title">{{ $index + 1 }}. {{ $pertanyaan->deskripsi_pertanyaan }}</h6>
                            @if ($pertanyaan->gambar)
                                <img src="{{ asset('storage/' . $pertanyaan->gambar) }}" class="img-fluid mb-3" alt="Question Image" width="150">
                            @endif
                            @foreach ($pertanyaan->jawaban->shuffle() as $jawaban)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question{{ $pertanyaan->id_pertanyaan }}" id="answer{{ $jawaban->id_jawaban }}" value="{{ $jawaban->id_jawaban }}" onchange="showClearButton({{ $pertanyaan->id_pertanyaan }})">
                                    <label class="form-check-label" for="answer{{ $jawaban->id_jawaban }}">
                                        {{ $jawaban->deskripsi_jawaban }}
                                    </label>
                                </div>
                            @endforeach
                            <div class="text-start mt-3">
                                <button type="button" class="btn btn-outline-danger btn-sm d-none" id="clearButton{{ $pertanyaan->id_pertanyaan }}" onclick="clearAnswer({{ $pertanyaan->id_pertanyaan }})">Hapus Jawaban</button>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    function showClearButton(questionId) {
        const clearButton = document.getElementById('clearButton' + questionId);
        clearButton.classList.remove('d-none');
    }

    function clearAnswer(questionId) {
        const radios = document.getElementsByName('question' + questionId);
        radios.forEach(radio => {
            radio.checked = false;
        });
        const clearButton = document.getElementById('clearButton' + questionId);
        clearButton.classList.add('d-none');
    }

    function validateQuiz() {
        // Check if all questions have been answered
        const form = document.getElementById('quiz-form');
        const questions = form.querySelectorAll('[name^="question"]');
        let allAnswered = true;

        questions.forEach(question => {
            if (!isChecked(question)) {
                allAnswered = false;
                // Optionally, you can highlight unanswered questions here
            }
        });

        if (!allAnswered) {
            // Show Bootstrap modal
            const modalHtml = `
                <div class="modal fade" id="quizAlertModal" tabindex="-1" aria-labelledby="quizAlertModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="quizAlertModalLabel">Perhatian!</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Silakan lengkapi semua soal sebelum submit!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Oke</button>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            
            // Append modal HTML to body
            document.body.insertAdjacentHTML('beforeend', modalHtml);
            
            // Show the modal
            const quizAlertModal = new bootstrap.Modal(document.getElementById('quizAlertModal'));
            quizAlertModal.show();
            
            return false; // Prevent form submission
        }

        return true; // Proceed with form submission
    }

    function isChecked(question) {
        const radios = document.getElementsByName(question.name);
        for (let i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return true;
            }
        }
        return false;
    }
</script>
@endsection

