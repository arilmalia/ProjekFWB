@extends('resource')

@section('content')
<section id="hero" class="hero section dark-background">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
          <h2>Strategic Solutions for Business Growth</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <div class="hero-btns" style="margin-top: 20px;">
            <a href="#consultation" class="btn btn-primary" style="margin-right: 10px;">Get a Free Consultation</a>
            <a href="#services" class="btn btn-outline">Our Services</a>
          </div>
          <div class="hero-stats" style="margin-top: 40px; display: flex; gap: 30px;">
            <div class="stat-item" style="text-align: center;">
              <h3><span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter">15</span>+</h3>
              <p>Years Experience</p>
            </div>
            <div class="stat-item" style="text-align: center;">
              <h3><span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter">500</span>+</h3>
              <p>Clients Worldwide</p>
            </div>
            <div class="stat-item" style="text-align: center;">
              <h3><span data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="1" class="purecounter">98</span>%</h3>
              <p>Success Rate</p>
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
