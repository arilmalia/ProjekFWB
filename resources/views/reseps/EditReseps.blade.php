@extends('resource')

@section('title', 'Edit Resep')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Edit Resep</h2>

    <form method="post" action="{{ url('/editresep/' . $resep->id) }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Pasien:</label>
            <select name="pasien_id" class="form-control" required>
                @foreach($pasiens as $p)
                    <option value="{{ $p->id }}" {{ $p->id == $resep->pasien_id ? 'selected' : '' }}>{{ $p->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Daftar:</label>
            <select name="daftar_id" class="form-control" required>
                @foreach($daftars as $d)
                    <option value="{{ $d->id }}" {{ $d->id == $resep->daftar_id ? 'selected' : '' }}>{{ $d->id }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Obat:</label>
            <input type="text" name="nama_obat" class="form-control" value="{{ $resep->nama_obat }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan:</label>
            <textarea name="keterangan" class="form-control" required>{{ $resep->keterangan }}</textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
    </form>
</div>
@endsection
