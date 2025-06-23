<header id="header" class="header d-flex align-items-center fixed-top" style="background-color: #005F5B;">
  <div class="container position-relative d-flex align-items-center justify-content-between">

    <a href="/pasien" class="logo d-flex align-items-center me-auto me-xl-0">
      <i class="bi bi-hospital text-white me-2" style="font-size: 2rem;"></i>
      <h1 class="sitename mb-0 text-white">Klinik INF</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="/pasien" class="{{ Request::is('pasien') ? 'active text-primary fw-bold' : 'text-white' }}">Home</a></li>
        <li><a href="/lihatpasien" class="{{ Request::is('lihatpasien*') ? 'active text-primary fw-bold' : 'text-white' }}">Pasien</a></li>
        <li><a href="/lihatresep" class="{{ Request::is('lihatresep*') ? 'active text-primary fw-bold' : 'text-white' }}">Resep</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list text-white"></i>
    </nav>

    <div class="d-flex align-items-center ms-3">
        @if(Auth::check())
            <span class="text-white me-3">
                <i class="bi bi-person-circle me-1"></i>
                {{ Auth::user()->name }}
            </span>
        @endif
        <a href="/logout" class="btn btn-light d-flex align-items-center gap-2">
            <i class="bi bi-box-arrow-right"></i>
            <span>Logout</span>
        </a>
    </div>

  </div>
</header>

<style>
.navmenu ul li a:hover {
  color: #0d6efd !important;
  font-weight: bold;
}

.navmenu ul li a.active {
  position: relative;
}

.navmenu ul li a.active::after {
  content: '';
  position: absolute;
  bottom: -5px;
  left: 0;
  width: 100%;
  height: 2px;
  background-color: #0d6efd;
}
</style>
