<header id="header" class="header d-flex align-items-center fixed-top">
  <style>
    /* Gaya untuk header/navbar */
    .header {
      background-color: #00897b; /* Warna hijau */
      color: white;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    /* Gaya untuk link menu */
    .navmenu a {
      color: white;
      text-decoration: none;
      margin-right: 10px;
      padding: 2px 5px;
      transition: background-color 0.3s;
      border-radius: 5px;
    }

    .navmenu a:hover {
      background-color: #00695c;
    }

    /* Gaya tombol Konsultasi */
    .btn-getstarted {
      background-color: #00695c;
      color: white;
      padding: 2px 16px;
      border-radius: 5px;
      text-decoration: none;
      margin-left: 10px;
    }

    .btn-getstarted:hover {
      background-color: #004d40;
    }
  </style>

  <div class="container position-relative d-flex align-items-center justify-content-between">

    <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
      <h1 class="sitename">Aplikasi Klinik</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul class="d-flex list-unstyled m-0">
        <li><a href="{{ url('/lihatdaftar') }}">Daftar</a></li>
        <li><a href="{{ url('/lihatdokter') }}">Dokter</a></li>
        <li><a href="{{ url('/lihatpasien') }}">Pasien</a></li>
        <li><a href="{{ url('/lihatreseps') }}">Resepsionis</a></li>
        <li><a href="{{ url('/lihatusers') }}">Users</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <a class="btn-getstarted" href="#consultation">Konsultasi</a>
  </div>
</header>
