@extends('layout.master')
@section('title','Matakuliah')
@section('content')
    
    <div class="container mt-4 p-4 text-center">
        <h1 class="display-4 text-white">Mata Kuliah</h1>
        
            <div class="row row-cols-md-2 gap-3">
            @forelse ($matkul as $matakuliah)

                <div class="row row-cols-1">
                    <div class="col">
                      <div class="card">
                        <img id="pict" src="https://source.unsplash.com/1600x900/?book" class="card-img-top" alt="...">
                        <div class="card-body">
                         
                          <h5 class="card-title">{{$matakuliah}}</h5>

                          <p class="card-text">Informatika adalah disiplin sains yang mengkaji struktur dan ciri (bukan isi spesifik) informasi ilmiah, juga keajegan keaktifan informasi ilmiah, teori, sejarah, metodologi dan organisasi informasi ilmiah.</p>
                          <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                      </div>
                    </div>
                </div>
                @empty
        <div class="alert alert-danger">Tidak ada data</div>
        @endforelse
            </div>
        </div>

@endsection
