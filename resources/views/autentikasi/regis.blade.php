@extends('resource')

@section('content')
<body class="starter-page-page bg-light">
<main class="main">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8">
        <div class="card shadow-lg border-0 rounded-4 p-4">
          <div class="text-center mb-4">
            <div class="display-4 mb-2">
              <i class="bi bi-hospital text-primary" style="font-size: 3rem;"></i>
            </div>
            <h2 class="mt-2 mb-1" style="font-weight: 700;">Daftar Akun</h2>
            <p class="text-muted mb-0">Silakan buat akun baru</p>
          </div>
          <form method="POST" action="{{ route('register1') }}">
            @csrf
            <div class="mb-3 text-start">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control form-control-lg" name="name" required placeholder="Masukkan nama lengkap">
            </div>
            <div class="mb-3 text-start">
              <label for="email" class="form-label">Alamat Email</label>
              <input type="email" class="form-control form-control-lg" name="email" required placeholder="Masukkan email">
            </div>
            <div class="mb-3 text-start">
              <label for="password" class="form-label">Kata Sandi</label>
              <input type="password" class="form-control form-control-lg" name="password" required placeholder="Buat kata sandi">
            </div>
            <div class="mb-3 text-start">
              <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
              <input type="password" class="form-control form-control-lg" name="password_confirmation" required placeholder="Ulangi kata sandi">
            </div>
            <div class="mb-3 text-start">
              <label for="role" class="form-label">Pilih Peran</label>
              <select name="role" class="form-control form-control-lg" required>
                <option value="" disabled selected>-- Pilih Role --</option>
                <option value="admin">Admin</option>
                <option value="dokter">Dokter</option>
                <option value="pasien">Pasien</option>
              </select>
            </div>
            <button type="submit" class="btn btn-success btn-lg w-100 mt-2 mb-3">
              <i class="bi bi-person-plus me-2"></i>Daftar
            </button>
            <div class="text-center mt-2">
              <small>Sudah punya akun? <a href="{{ route('login') }}" class="text-decoration-underline">Masuk di sini</a></small>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
