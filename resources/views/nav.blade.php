<header id="header" class="header d-flex align-items-center fixed-top" style="background-color: #005F5B; color: white;">
  <div class="container position-relative d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0 text-white">
      <i class="bi bi-hospital text-primary me-2" style="font-size: 2rem;"></i>
      <h1 class="sitename mb-0">Klinik INF</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="/admin" class="{{ Request::is('admin') ? 'active text-white' : 'text-white' }}">Home</a></li>
        <li><a href="/lihatdaftar" class="{{ Request::is('lihatdaftar*') ? 'active text-white' : 'text-white' }}">Daftar</a></li>
        <li><a href="/lihatdokter" class="{{ Request::is('lihatdokter*') ? 'active text-white' : 'text-white' }}">Dokter</a></li>
        <li><a href="/lihatpasien" class="{{ Request::is('lihatpasien*') ? 'active text-white' : 'text-white' }}">Pasien</a></li>
        <li><a href="/lihatresep" class="{{ Request::is('lihatresep*') ? 'active text-white' : 'text-white' }}">Resep</a></li>
        <li><a href="/logins" class="text-white">Role</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list text-white"></i>
    </nav>

    <div class="ms-3">
      <a href="/logout" class="btn btn-light d-flex align-items-center gap-2">
        <i class="bi bi-box-arrow-right"></i>
        <span>Logout</span>
      </a>
    </div>

  </div>
</header>
