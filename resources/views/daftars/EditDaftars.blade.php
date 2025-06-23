@extends('resource')

@section('title', 'Edit Pendaftaran')

@section('content')
<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="text-center mb-4 fw-bold">Edit Pendaftaran Konsultasi</h2>

                    <form method="post" action="{{ url('/editdaftar/' . $daftar->id) }}">
                        @csrf

                        <div class="mb-4">
                            <label class="form-label fw-bold">Pasien:</label>
                            <select name="pasien_id" class="form-select" required>
                                <option value="">-- Pilih Pasien --</option>
                                @foreach($pasiens as $p)
                                    <option value="{{ $p->id }}" {{ $daftar->pasien_id == $p->id ? 'selected' : '' }}>
                                        {{ $p->no_pasien }} - {{ $p->nama }}
                                    </option>
                                @endforeach
                            </select>
                            <small class="text-muted">Pilih pasien yang akan melakukan konsultasi</small>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Dokter:</label>
                            <select name="dokter_id" class="form-select" required>
                                <option value="">-- Pilih Dokter --</option>
                                @foreach($dokters as $d)
                                    <option value="{{ $d->id }}" {{ $daftar->dokter_id == $d->id ? 'selected' : '' }}>
                                        {{ $d->no_dokter }} - {{ $d->nama }} ({{ $d->spesialis }})
                                    </option>
                                @endforeach
                            </select>
                            <small class="text-muted">Pilih dokter yang akan menangani konsultasi</small>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Keluhan:</label>
                            <textarea name="keluhan" class="form-control" rows="3" required
                                    placeholder="Deskripsikan keluhan yang dialami">{{ $daftar->keluhan }}</textarea>
                            <small class="text-muted">Jelaskan keluhan dengan detail untuk membantu diagnosis</small>
                        </div>

                        <div class="text-center">
                            <a href="{{ url('/lihatdaftar') }}" class="btn btn-secondary me-2">Batal</a>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save me-2"></i>Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
