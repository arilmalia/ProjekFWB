@extends('resource')
@section('title', 'Home Pasien')
@section('content')
<section id="hero" class="hero section dark-background">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
          <h2>Selamat Datang, Pasien!</h2>
          <p>Kesehatan Anda prioritas kami. Silakan gunakan layanan yang tersedia untuk memantau dan menjaga kesehatan Anda.</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="hero-image" data-aos="zoom-out" data-aos-delay="300" style="text-align: center;">
          <img src="{{ asset('assets/img/about/about-21.webp') }}" alt="Pasien" class="img-fluid" style="max-width: 100%; height: auto;">
        </div>
      </div>
    </div>
  </div>
</section>
@endsection 