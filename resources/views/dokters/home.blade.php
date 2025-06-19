@extends('resource')
@section('title', 'Home Dokter')
@section('content')
<section id="hero" class="hero section dark-background">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
          <h2>Selamat Datang, Dokter!</h2>
          <p>Terima kasih telah menjadi bagian dari tim kesehatan kami. Layani pasien dengan sepenuh hati dan profesionalisme.</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="hero-image" data-aos="zoom-out" data-aos-delay="300" style="text-align: center;">
          <img src="{{ asset('assets/img/about/about-21.webp') }}" alt="Dokter" class="img-fluid" style="max-width: 100%; height: auto;">
        </div>
      </div>
    </div>
  </div>
</section>
@endsection 