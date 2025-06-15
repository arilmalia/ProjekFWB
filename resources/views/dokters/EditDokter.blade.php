@extends('resource')

@section('title', 'Edit Dokter')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Edit Dokter</h2>

    <form method="post" action="{{ url('/editdokter/' . $dokter->id) }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">User:</label>
            <select name="user_id" class="form-control" required>
                @foreach($users as $u)
                    <option value="{{ $u->id }}" {{ $u->id == $dokter->user_id ? 'selected' : '' }}>{{ $u->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">No Dokter:</label>
            <input type="text" name="no_dokter" value="{{ $dokter->no_dokter }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama:</label>
            <input type="text" name="nama" value="{{ $dokter->nama }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Spesialis:</label>
            <input type="text" name="spesialis" value="{{ $dokter->spesialis }}" class="form-control" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
    </form>
</div>
@endsection
