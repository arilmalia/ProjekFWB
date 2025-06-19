@extends('resource')
@section('title', 'Home Umum')
@section('content')
<section id="hero" class="hero section dark-background" style="min-height: 100vh; display: flex; align-items: center;">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
          <div class="text-center mb-3">
            <i class="bi bi-hospital text-primary" style="font-size: 4.5rem;"></i>
          </div>
          <h1 style="font-size: 3rem; margin-bottom: 1rem;">Selamat Datang di Klinik INF</h1>
          <p class="lead mb-4">Silakan login atau daftar untuk mengakses layanan kesehatan kami.</p>
          
          <div class="hero-btns d-flex justify-content-center gap-3 mb-5">
            <a href="/login" class="btn btn-primary btn-lg px-4">
              <i class="bi bi-box-arrow-in-right me-2"></i>Login
            </a>
            <a href="/register" class="btn btn-success btn-lg px-4">
              <i class="bi bi-person-plus me-2"></i>Register
            </a>
          </div>

          <div class="hero-image mt-4" data-aos="zoom-out" data-aos-delay="300">
            <img src="{{ asset('assets/img/about/about-21.webp') }}" alt="Klinik INF" class="img-fluid rounded-3 shadow" style="max-width: 80%; height: auto;">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection 