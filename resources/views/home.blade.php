@extends('resource')

@section('content')
<section id="hero" class="hero section dark-background">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
          <h2>Pelayanan Kesehatan Terbaik untuk Keluarga Anda</h2>
          <p>Kami berkomitmen memberikan layanan medis yang aman, cepat, dan profesional. Didukung oleh tenaga medis berpengalaman dan fasilitas modern untuk menjaga kesehatan Anda dan keluarga. </p>
          <div class="hero-btns" style="margin-top: 20px;">
            <a href="/tambahdaftar" class="btn btn-primary" style="margin-right: 10px;">Daftar Konsultasi Gratis</a>
            <a href="#services" class="btn btn-outline">Lihat Layanan kami</a>
          </div>
          <div class="hero-stats" style="margin-top: 40px; display: flex; gap: 30px;">
            <div class="stat-item" style="text-align: center;">
              <h3><span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter">10</span>+</h3>
              <p>Tahun Pengalaman</p>
            </div>
            <div class="stat-item" style="text-align: center;">
              <h3><span data-purecounter-start="0" data-purecounter-end="1000" data-purecounter-duration="1" class="purecounter">1000</span>+</h3>
              <p>Pasien Terlayani</p>
            </div>
            <div class="stat-item" style="text-align: center;">
              <h3><span data-purecounter-start="0" data-purecounter-end="95" data-purecounter-duration="1" class="purecounter">95</span>%</h3>
              <p>Kepuasan Pasien</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="hero-image" data-aos="zoom-out" data-aos-delay="300" style="text-align: center;">
          <img src="{{ asset('assets/img/about/about-21.webp') }}" alt="Consulting Services" class="img-fluid" style="max-width: 100%; height: auto;">
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
