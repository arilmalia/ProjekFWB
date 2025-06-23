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
    <link rel="stylesheet" href="{{ asset('assets/vendor/aos/aos.css') }}" />
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    
    @yield('styles')
    
    <!-- Custom styles -->
    <style>
      html, body {
        height: 100%;
        margin: 0;
      }
      body {
        display: flex;
        flex-direction: column;
        background-color: #f8f9fa;
        position: relative;
        overflow-x: hidden;
      }
      .plus-pattern {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        pointer-events: none;
      }
      .plus {
        position: absolute;
        content: '+';
        font-size: 30px;
        color: #FF0000;
        font-weight: bold;
        font-family: Arial, sans-serif;
        opacity: 0.15;
      }
      .main-content {
        flex: 1 0 auto;
        min-height: calc(100vh - 80px);
        padding-bottom: 2rem;
        position: relative;
        z-index: 1;
      }
      .card {
        background-color: rgba(255, 255, 255, 0.95) !important;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
      }
      .btn-outline {
        border: 2px solid #fff;
        color: #fff;
        background: transparent;
      }
      .btn-outline:hover {
        background: #fff;
        color: #222;
      }
      .dark-background {
        background: linear-gradient(rgba(0, 95, 91, 0.82), rgba(0, 95, 91, 0.82));
        color: #fff;
        position: relative;
        z-index: 1;
      }
      section:not(.dark-background) {
        background: rgba(255, 255, 255, 0.92);
        padding: 40px 0;
        border-radius: 10px;
        margin: 15px 0;
      }
      .footer {
        flex-shrink: 0;
        background: rgba(255, 255, 255, 0.97);
        padding: 30px 0;
        position: relative;
        margin-top: auto;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
      }
      /* Fix untuk modal */
      .modal-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1040;
      }
      .modal {
        z-index: 1050;
      }
      .modal-open {
        overflow: hidden;
        padding-right: 0 !important;
      }
      .modal-dialog {
        margin: 1.75rem auto;
      }
    </style>

    <!-- PureCounter JS (deferred) -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}" defer></script>
</head>

<body>
    <div class="plus-pattern">
        @php
            for($i = 0; $i < 200; $i++) {
                $top = rand(0, 100);
                $left = rand(0, 100);
                echo "<div class='plus' style='top: {$top}%; left: {$left}%;'>+</div>";
            }
        @endphp
    </div>

    @if(Auth::check())
        @if(Auth::user()->role == 'admin')
            @include('nav')
        @elseif(Auth::user()->role == 'dokter')
            @include('nav2')
        @elseif(Auth::user()->role == 'pasien')
            @include('nav3')
        @endif
    @endif

    <div class="main-content">
        @yield('content')
    </div>

    @include('footer')

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        AOS.init({ once: true });
        if (typeof PureCounter !== 'undefined') {
          new PureCounter();
        }
      });
    </script>
    
    @stack('scripts')
</body>

</html>
