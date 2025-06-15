<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'My Application')</title>
  
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">  
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
  <!-- AOS Animation CSS -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/aos/aos.css') }}" />
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')  }}" rel="stylesheet">
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
  <!-- Custom dark-background override -->
  <style>
    /* .dark-background {
      background-color: #222;
      color: #fff;
    } */
    .btn-outline {
      border: 2px solid #fff;
      color: #fff;
      background: transparent;
    }
    .btn-outline:hover {
      background: #fff;
      color: #222;
    }
  </style>

  <!-- PureCounter JS (deferred) -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}" defer></script>
</head>
<body>
  
    @include('nav') <!-- Menyisipkan navbar -->
  {{-- Konten dari child view --}}
  @yield('content')

  <!-- AOS Animation JS -->
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      AOS.init({ once: true });
      new PureCounter();
    });
  </script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>  
  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  @include('footer')
</body>

</html>
