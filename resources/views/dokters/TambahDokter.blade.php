@extends('resource')

@section('title', 'Tambah Dokter')

@section('content')
<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="text-center mb-4 fw-bold">Tambah Data Dokter</h2>

                    <form method="post" action="{{ url('/tambahdokter') }}">
                        @csrf

                        <div class="mb-4">
                            <label class="form-label fw-bold">Akun User:</label>
                            <select name="user_id" class="form-select" required>
                                <option value="">-- Pilih User Dokter --</option>
                                @foreach($users as $u)
                                    <option value="{{ $u->id }}">{{ $u->name }} ({{ $u->email }})</option>
                                @endforeach
                            </select>
                            <small class="text-muted">Pilih akun user yang terdaftar sebagai dokter</small>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Nomor Dokter:</label>
                            <input type="text" name="no_dokter" class="form-control" required
                                   placeholder="Contoh: DR001">
                            <small class="text-muted">Masukkan nomor identifikasi dokter</small>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Nama Lengkap:</label>
                            <input type="text" name="nama" class="form-control" required
                                   placeholder="Masukkan nama lengkap dokter">
                            <small class="text-muted">Masukkan nama lengkap beserta gelar jika ada</small>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Spesialis:</label>
                            <input type="text" name="spesialis" class="form-control" required
                                   placeholder="Contoh: Dokter Umum">
                            <small class="text-muted">Masukkan bidang spesialisasi dokter</small>
                        </div>

                        <div class="text-center">
                            <a href="{{ url('/lihatdokter') }}" class="btn btn-secondary me-2">Batal</a>
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-plus-circle me-2"></i>Tambah Dokter
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

