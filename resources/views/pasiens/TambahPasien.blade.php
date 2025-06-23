@extends('resource')

@section('title', 'Tambah Pasien')

@section('content')
<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="text-center mb-4 fw-bold">Tambah Data Pasien</h2>

                    <form method="post" action="{{ url('/tambahpasien') }}">
                        @csrf

                        @if(Auth::check() && Auth::user()->role == 'admin')
                            <div class="mb-4">
                                <label class="form-label fw-bold">Akun User:</label>
                                <select name="user_id" class="form-select" required>
                                    <option value="">-- Pilih User Pasien --</option>
                                    @foreach($users as $u)
                                        <option value="{{ $u->id }}">{{ $u->name }} ({{ $u->email }})</option>
                                    @endforeach
                                </select>
                                <small class="text-muted">Pilih akun user yang terdaftar sebagai pasien</small>
                            </div>
                        @else
                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                        @endif

                        <div class="mb-4">
                            <label class="form-label fw-bold">Nomor Pasien:</label>
                            <input type="text" name="no_pasien" class="form-control" required
                                   placeholder="Contoh: PSN001">
                            <small class="text-muted">Masukkan nomor identifikasi pasien</small>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Nama Lengkap:</label>
                            <input type="text" name="nama" class="form-control" required
                                   placeholder="Masukkan nama lengkap pasien">
                            <small class="text-muted">Masukkan nama lengkap sesuai identitas</small>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Umur:</label>
                            <input type="number" name="umur" class="form-control" required
                                   placeholder="Masukkan umur">
                            <small class="text-muted">Masukkan umur dalam tahun</small>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Jenis Kelamin:</label>
                            <select name="jenis_kelamin" class="form-select" required>
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <small class="text-muted">Pilih jenis kelamin pasien</small>
                        </div>

                        <div class="text-center">
                            <a href="{{ url('/lihatpasien') }}" class="btn btn-secondary me-2">Batal</a>
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-plus-circle me-2"></i>Tambah Pasien
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
