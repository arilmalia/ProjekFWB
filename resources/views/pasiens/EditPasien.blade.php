@extends('resource')
@section('title', 'Edit Pasien')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Edit Pasien</h2>

    <form method="post" action="{{ url('/editpasien/' . $pasien->id) }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">User:</label>
            <select name="user_id" class="form-control" required>
                @foreach($users as $u)
                    <option value="{{ $u->id }}" {{ $u->id == $pasien->user_id ? 'selected' : '' }}>
                        {{ $u->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">No Pasien:</label>
            <input type="text" name="no_pasien" value="{{ $pasien->no_pasien }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama:</label>
            <input type="text" name="nama" value="{{ $pasien->nama }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Umur:</label>
            <input type="number" name="umur" value="{{ $pasien->umur }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Kelamin:</label>
            <select name="jenis_kelamin" class="form-control" required>
                <option value="Laki-laki" {{ $pasien->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $pasien->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
    </form>
</div>
@endsection
