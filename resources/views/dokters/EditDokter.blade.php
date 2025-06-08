@extends('resource')
@section('title', 'Edit Dokter')

@section('content')
<br>

</br>
<h2>Edit Dokter</h2>
<form method="post" action="{{ url('/editdokter/' . $dokter->id) }}">
    @csrf
    <label>User:</label>
    <select name="user_id" required>
        @foreach($users as $u)
            <option value="{{ $u->id }}" {{ $u->id == $dokter->user_id ? 'selected' : '' }}>{{ $u->name }}</option>
        @endforeach
    </select><br><br>

    <label>No Dokter:</label>
    <input type="text" name="no_dokter" value="{{ $dokter->no_dokter }}" required><br><br>

    <label>Nama:</label>
    <input type="text" name="nama" value="{{ $dokter->nama }}" required><br><br>

    <label>Spesialis:</label>
    <input type="text" name="spesialis" value="{{ $dokter->spesialis }}" required><br><br>

    <button type="submit">Simpan Perubahan</button>
</form>
@endsection
