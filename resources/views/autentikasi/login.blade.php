@extends('resource')

@section('content')
<body class="starter-page-page bg-light">
<main class="main">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-7">
        <div class="card shadow-lg border-0 rounded-4 p-4">
          <div class="text-center mb-4">
            <div class="display-4 mb-2">
              <i class="bi bi-hospital text-primary" style="font-size: 3rem;"></i>
            </div>
            <h2 class="mt-2 mb-1" style="font-weight: 700;">Login</h2>
            <p class="text-muted mb-0">Silakan masuk untuk melanjutkan</p>
          </div>
          @if ($errors->any())
            <div class="alert alert-danger text-center">
              {{ $errors->first() }}
            </div>
          @endif
          <form method="POST" action="{{ route('kirimdata') }}">
            @csrf
            <div class="mb-3 text-start">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control form-control-lg" name="email" required autofocus placeholder="Masukkan email">
            </div>
            <div class="mb-3 text-start">
              <label for="password" class="form-label">Kata Sandi</label>
              <input type="password" class="form-control form-control-lg" name="password" required placeholder="Masukkan kata sandi">
            </div>
            <div class="mb-3 form-check text-start">
              <input type="checkbox" class="form-check-input" name="ingat" id="ingat">
              <label class="form-check-label" for="ingat">Ingat saya</label>
            </div>
            <button type="submit" class="btn btn-primary btn-lg w-100 mt-2 mb-3">
              <i class="bi bi-box-arrow-in-right me-2"></i>Masuk
            </button>
            <div class="text-center mt-2">
              <small>Belum punya akun? <a href="{{ route('register') }}" class="text-decoration-underline">Daftar di sini</a></small>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
