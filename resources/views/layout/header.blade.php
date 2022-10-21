<nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="https://unsika.ac.id/wp-content/uploads/2021/06/image.png" alt="logo" height="38px" weight="20px"> Sistem Informasi Akademik</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-right" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{request()->is('dosen')?'active':''}}" href="/dosen">Dosen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{request()->is('mahasiswa')?'active':''}}" href="/mahasiswa">Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{request()->is('matakuliah')?'active':''}}" href="/matakuliah">Matakuliah</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>