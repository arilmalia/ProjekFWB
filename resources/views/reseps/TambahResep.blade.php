@extends('resource')

@section('title', 'Tambah Resep')

@section('content')
<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="text-center mb-4 fw-bold">Tambah Resep Obat</h2>

                    <form method="post" action="{{ url('/tambahresep') }}">
                        @csrf

                        <div class="mb-4">
                            <label class="form-label fw-bold">Nama Pasien:</label>
                            <select name="pasien_id" class="form-select" required>
                                <option value="">-- Pilih Pasien --</option>
                                @foreach($pasiens as $p)
                                    <option value="{{ $p->id }}">{{ $p->no_pasien }} - {{ $p->nama }}</option>
                                @endforeach
                            </select>
                            <small class="text-muted">Pilih pasien yang akan diberikan resep</small>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Nomor Pendaftaran:</label>
                            <select name="daftar_id" class="form-select" required>
                                <option value="">-- Pilih Nomor Pendaftaran --</option>
                                @foreach($daftars as $d)
                                    <option value="{{ $d->id }}">No. Daftar: {{ $d->id }} - Tanggal: {{ date('d/m/Y', strtotime($d->created_at)) }}</option>
                                @endforeach
                            </select>
                            <small class="text-muted">Pilih nomor pendaftaran yang sesuai dengan kunjungan pasien</small>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Nama Obat:</label>
                            <input type="text" name="nama_obat" class="form-control" required 
                                   placeholder="Contoh: Paracetamol 500mg">
                            <small class="text-muted">Masukkan nama obat beserta dosis</small>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Keterangan Pemakaian:</label>
                            <textarea name="keterangan" class="form-control" rows="3" required
                                    placeholder="Contoh: 3x1 sehari setelah makan"></textarea>
                            <small class="text-muted">Tuliskan aturan pakai obat dengan jelas</small>
                        </div>

                        <div class="text-center">
                            <a href="{{ url('/lihatresep') }}" class="btn btn-secondary me-2">Batal</a>
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-plus-circle me-2"></i>Tambah Resep
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
