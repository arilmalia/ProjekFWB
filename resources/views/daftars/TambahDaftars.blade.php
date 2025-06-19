@extends('resource')

@section('title', 'Tambah Daftar')

@section('content')
<div class="container mt-5 pt-5 style="padding-top: 100px;">
    <h2 class="text-center mb-4 fw-bold">Tambah Pendaftaran</h2>

    <form method="post" action="{{ url('/tambahdaftar') }}">
        @csrf

        <div class="mb-3">
            <label for="pasien_id" class="form-label">Pasien</label>
            <select class="form-select" id="pasien_id" name="pasien_id" required>
                <option value="" disabled selected>-- Pilih Pasien --</option>
                @foreach ($pasiens as $d)
                    <option value="{{ $d->id }}">{{ $d->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="dokter_id" class="form-label">Dokter</label>
            <select class="form-select" id="dokter_id" name="dokter_id" required>
                <option value="" disabled selected>-- Pilih Dokter --</option>
                @foreach ($dokters as $d)
                    <option value="{{ $d->id }}">{{ $d->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tanggal_daftar" class="form-label">Tanggal Daftar</label>
            <input type="date" class="form-control" id="tanggal_daftar" name="tanggal_daftar" required>
        </div>

        <div class="mb-3">
            <label for="keluhan" class="form-label">Keluhan</label>
            <input type="text" class="form-control" id="keluhan" name="keluhan" required>
        </div>

        <div class="mb-3">
            <label for="diagnosis" class="form-label">Diagnosis</label>
            <input type="text" class="form-control" id="diagnosis" name="diagnosis">
        </div>

        <div class="mb-3">
            <label for="tindakan" class="form-label">Tindakan</label>
            <input type="text" class="form-control" id="tindakan" name="tindakan">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
