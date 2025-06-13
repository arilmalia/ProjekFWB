@extends('resource')
@section('content')
<body class="starter-page-page">

<main class="main">

  <!-- Page Title -->
  <div class="page-title">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8 col-md-10 col-12">
            <h1>Daftar Akun</h1>
            <p class="mb-0">Silakan buat akun</p>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Page Title -->

  <!-- Register Form Section -->
  <section id="register-section" class="section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-12">
          <div class="card p-4 shadow rounded border-0">
            <form  action="/register1" method="POST">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name" required autocomplete="name">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" class="form-control" id="email" name="email" required autocomplete="email">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password">
              </div>
              <div class="mb-3">
                <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
              </div>
              <button type="submit" class="btn btn-success w-100">Daftar</button>
              <div class="text-center mt-3">
                <small>Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a></small>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section><!-- /Register Form Section -->

</main>

<style>
  body.starter-page-page {
    background: linear-gradient(135deg, #e0f7fa 0%, #fff 100%);
    min-height: 100vh;
    font-family: 'Segoe UI', Arial, sans-serif;
  }
  .main {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding-bottom: 2rem;
  }
  .page-title .heading {
    padding-top: 2.5rem;
    padding-bottom: 2.5rem;
    /* background: rgba(255,255,255,0.7); */
    border-radius: 1rem;
    margin-bottom: 2rem;
    box-shadow: 0 2px 15px rgba(0,0,0,0.04);
  }
  .card.p-4 {
    background: #fff;
    border-radius: 1.25rem;
    box-shadow: 0 4px 24px rgba(0,0,0,0.08);
    padding: 2.5rem !important;
    transition: box-shadow 0.2s;
  }
  .card.p-4:hover {
    box-shadow: 0 8px 32px rgba(0,0,0,0.12);
  }
  .form-label {
    font-weight: 500;
    color: #00796b;
  }
  .form-control:focus {
    border-color: #26a69a;
    box-shadow: 0 0 0 0.2rem rgba(38,166,154,.15);
  }
  .btn-success {
    background: linear-gradient(90deg, #26a69a 0%, #43cea2 100%);
    border: none;
    font-weight: 600;
    letter-spacing: 1px;
    transition: background 0.2s;
  }
  .btn-success:hover {
    background: linear-gradient(90deg, #43cea2 0%, #26a69a 100%);
  }
  .mb-3 {
    margin-bottom: 1.5rem !important;
  }
  .text-center.mt-3 small {
    color: #666;
  }
  /* Show/hide password icon style */
  .mb-3 > div {
    display: flex;
    align-items: center;
    position: relative;
  }
  .mb-3 input[type="password"] + span,
  .mb-3 input[type="text"] + span {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    font-size: 1.1rem;
    color: #26a69a;
    user-select: none;
  }
  @media (max-width: 768px) {
    .main {
      padding-bottom: 1rem;
    }
    .card.p-4 {
      padding: 1.5rem !important;
    }
    .page-title .heading {
      padding-top: 1.5rem;
      padding-bottom: 1.5rem;
      margin-bottom: 1rem;
    }
  }
  @media (max-width: 576px) {
    .main {
      padding-bottom: 0.5rem;
    }
    .card.p-4 {
      padding: 1rem !important;
      border-radius: 0.75rem;
    }
    .page-title .heading {
      padding-top: 1rem;
      padding-bottom: 1rem;
      border-radius: 0.5rem;
    }
  }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const form = document.querySelector('form');
  const password = document.getElementById('password');
  const passwordConfirmation = document.getElementById('password_confirmation');
  const submitBtn = form.querySelector('button[type="submit"]');

  // Create show/hide password toggle
  [password, passwordConfirmation].forEach(input => {
    const wrapper = document.createElement('div');
    wrapper.style.position = 'relative';
    input.parentNode.insertBefore(wrapper, input);
    wrapper.appendChild(input);

    const toggle = document.createElement('span');
    toggle.style.position = 'absolute';
    toggle.style.right = '10px';
    toggle.style.top = '50%';
    toggle.style.transform = 'translateY(-50%)';
    toggle.style.cursor = 'pointer';
    toggle.title = 'Tampilkan/Sembunyikan Password';
    wrapper.appendChild(toggle);

    toggle.addEventListener('click', function() {
      input.type = input.type === 'password' ? 'text' : 'password';
    });
  });

  function validateForm() {
    let valid = true;
    // Password minimal 8 karakter dan ada angka
    if (password.value.length < 8 || !/\d/.test(password.value)) {
      password.setCustomValidity('Password minimal 8 karakter dan mengandung angka.');
      valid = false;
    } else {
      password.setCustomValidity('');
    }
    // Konfirmasi password harus sama
    if (password.value !== passwordConfirmation.value) {
      passwordConfirmation.setCustomValidity('Konfirmasi password tidak sama.');
      valid = false;
    } else {
      passwordConfirmation.setCustomValidity('');
    }
    submitBtn.disabled = !valid;
  }

  password.addEventListener('input', validateForm);
  passwordConfirmation.addEventListener('input', validateForm);
  form.addEventListener('submit', validateForm);
});
</script>
@endsection