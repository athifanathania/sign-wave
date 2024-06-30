@extends('layouts.admin.app')

@section('content')
<main id="main" class="main">

<div class="pagetitle">
  <h1>Kelola Artikel</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.artikel.index') }}">Home</a></li>
      <li class="breadcrumb-item">Artikel</li>
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
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Tambah Artikel</h5>
        <a href="{{ route('admin.artikel.tambah') }}" class="btn btn-outline-primary">TAMBAH</a>
        <!-- Default Table -->
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Judul Artikel</th>
              <th scope="col">Isi Artikel</th>
              <th scope="col">Tautan</th>
              <th scope="col">Waktu Dibuat</th>
              <th scope="col">Waktu Diperbaharui</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($artikel_signwave as $index => $artikel)
            <tr>
              <th scope="row">{{ $index + 1 }}</th>
              <td>{{ $artikel->judul_artikel }}</td>
              <td>{{ Str::limit($artikel->konten, 100, '...') }}</td>
              <td>{{ $artikel->link }}</td>
              <td>{{ $artikel->created_at }}</td>
              <td>{{ $artikel->updated_at }}</td>
              <td>
                <a href="{{ route('admin.artikel.edit', $artikel->id) }}" class="btn btn-success" style="margin-bottom: 10px;">Edit</a>
                <form action="{{ route('admin.artikel.destroy', $artikel->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <!-- End Default Table Example -->
      </div>
    </div>
  </div>
</section>

</main><!-- End main -->  
@endsection
