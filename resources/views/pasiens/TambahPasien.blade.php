@extends('resource')
@section('title', 'Tambah Pasien')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Tambah Pasien</h2>

    <form method="post" action="{{ url('/tambahpasien') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">User:</label>
            <select name="user_id" class="form-control" required>
                @foreach($users as $u)
                    <option value="{{ $u->id }}">{{ $u->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">No Pasien:</label>
            <input type="text" name="no_pasien" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama:</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Umur:</label>
            <input type="number" name="umur" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Kelamin:</label>
            <select name="jenis_kelamin" class="form-control" required>
                <option value="">-- Pilih --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
    </form>
</div>
@endsection
