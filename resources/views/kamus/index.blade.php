@extends('layouts.admin.app')

@section('content')

<main id="main" class="main">
<div class="pagetitle">
    <h1>Kelola Kamus</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active">Kamus</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <!-- Flash Message -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tambah Kamus</h5>
                    <a href="{{ route('admin.kamus.tambah') }}"><button type="button" class="btn btn-primary mb-3">TAMBAH</button></a>

                    <!-- Table with stripped rows -->
                    <div class="table-responsive">
                        <table class="table table-striped datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kata</th>
                                    <th>Deskripsi</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($kamus_signwave as $index => $kamus)
                                <tr>
                                    <td>{{ ($kamus_signwave->currentPage() - 1) * $kamus_signwave->perPage() + $index + 1 }}</td>
                                    <td>{{ $kamus->kata }}</td>
                                    <td>{{ Str::limit($kamus->deskripsi, 100, '...') }}</td>
                                    <td>
                                      
                                            <img src="{{ asset('assets/img/kamus/' . $kamus->gambar) }}" alt="gambar" style="max-width: 100px;">
                                     
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('admin.kamus.edit',  $kamus->id) }}" class="btn btn-warning btn-sm me-2 flex-fill">
                                                <i class="bi bi-pencil-square"></i> Edit
                                            </a>
                                            <form action="{{ route('admin.kamus.destroy', $kamus->id) }}" method="POST" style="display:inline;" class="flex-fill delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm delete-button w-100">
                                                    <i class="bi bi-trash"></i> Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table with stripped rows -->

                    <!-- Pagination links -->
                    <div class="d-flex justify-content-center">
                        {{ $kamus_signwave->links() }}
                    </div>
                    <!-- End Pagination links -->
                </div>
            </div>
        </div>
    </div>
</section>
</main>
@endsection
