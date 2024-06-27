// resources/views/pertanyaan/create.blade.php

@extends('layouts.main')

@section('title', 'Add New Pertanyaan')

@section('content')
<div class="pagetitle">
    <h1>Add New Pertanyaan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('pertanyaan.index') }}">Pertanyaan Index</a></li>
            <li class="breadcrumb-item active">Add New Pertanyaan</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Create New Pertanyaan</h5>

                    <form action="{{ route('pertanyaan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        @include('pertanyaan._form', ['buttonText' => 'Create'])

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
