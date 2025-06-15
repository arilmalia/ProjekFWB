@extends('resource')

@section('title', 'Edit Daftar')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Edit Pendaftaran</h2>

    <form method="post" action="{{ url('/editdaftar/' . $daftar->id) }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Pasien:</label>
            <select name="pasien_id" class="form-control" required>
                @foreach ($pasiens as $p)
                    <option value="{{ $p->id }}" {{ $daftar->pasien_id == $p->id ? 'selected' : '' }}>{{ $p->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Dokter:</label>
            <select name="dokter_id" class="form-control" required>
                @foreach ($dokters as $d)
                    <option value="{{ $d->id }}" {{ $daftar->dokter_id == $d->id ? 'selected' : '' }}>{{ $d->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal Daftar:</label>
            <input type="date" name="tanggal_daftar" value="{{ $daftar->tanggal_daftar }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Keluhan:</label>
            <input type="text" name="keluhan" value="{{ $daftar->keluhan }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Diagnosis:</label>
            <input type="text" name="diagnosis" value="{{ $daftar->diagnosis }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Tindakan:</label>
            <input type="text" name="tindakan" value="{{ $daftar->tindakan }}" class="form-control">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection
