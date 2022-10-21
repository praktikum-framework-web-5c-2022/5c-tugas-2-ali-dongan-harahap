@extends('layout.master')

@section('content')

<div class="container pt-4 mt-4">  
  <h1 class="display-4 text-white text-center">Nama Mahasiswa</h1>
  <div class="row row-cols-2 row-cols-md-6 gap-4 justify-content-center">
    @forelse ($mahasiswaa as $mahasiswa)
      <div class="card">
          <div class="row justify-content-center text-center card-body">
              <img src="https://source.unsplash.com/900x900/?user" class="img-fluid rounded-circle w-50 mb-3">
              <h3>{{ $mahasiswa }}</h3>
              <h5 class="text-muted">Mahasiswa</h5>
              
              <div class="py-3">
                  <a href="https://www.facebook.com/alidongan.harahap" class="text-secondary text-decoration-none fs-5 me-2">
                      <i class="bi bi-facebook"></i>
                  </a>
                  <a href="https://www.tiktok.com/@akuusiapaaaaa1" class="text-secondary text-decoration-none fs-5 me-2">
                      <i class="bi bi-tiktok"></i>
                  </a>
                  <a href="https://www.instagram.com/choco.kran_/" class="text-secondary text-decoration-none fs-5 me-2">
                      <i class="bi bi-instagram"></i>
                  </a>
              </div>
          </div>
      </div>
      @empty
      <div class="alert alert-danger">Tidak ada data</div>
      @endforelse
  </div>


                          
@endsection