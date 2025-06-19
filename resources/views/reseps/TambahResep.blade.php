@extends('resource')

@section('title', 'Tambah Resep')

@section('content')
<div class="container mt-5 pt-5 style="padding-top: 100px;">
    <h2 class="text-center mb-4 fw-bold">Tambah Resep</h2>

    <form method="post" action="{{ url('/tambahresep') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Pasien:</label>
            <select name="pasien_id" class="form-control" required>
                @foreach($pasiens as $p)
                    <option value="{{ $p->id }}">{{ $p->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Daftar:</label>
            <select name="daftar_id" class="form-control" required>
                @foreach($daftars as $d)
                    <option value="{{ $d->id }}">{{ $d->id }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Obat:</label>
            <input type="text" name="nama_obat" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan:</label>
            <textarea name="keterangan" class="form-control" required></textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success">Tambah Resep</button>
        </div>
    </form>
</div>
@endsection
