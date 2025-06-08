@extends('resource')

@section('title', 'Edit Pasien')

@section('content')
<br>

</br>
<h2>Edit Pasien</h2>

<form method="post" action="{{ url('/editpasien/' . $pasien->id) }}">
    @csrf

    <label>User:</label>
    <select name="user_id" required>
        @foreach($users as $u)
            <option value="{{ $u->id }}" {{ $u->id == $pasien->user_id ? 'selected' : '' }}>{{ $u->name }}</option>
        @endforeach
    </select>
    <br><br>

    <label>No Pasien:</label>
    <input type="text" name="no_pasien" value="{{ $pasien->no_pasien }}" required>
    <br><br>

    <label>Nama:</label>
    <input type="text" name="nama" value="{{ $pasien->nama }}" required>
    <br><br>

    <label>Umur:</label>
    <input type="number" name="umur" value="{{ $pasien->umur }}" required>
    <br><br>

    <label>Jenis Kelamin:</label>
    <select name="jenis_kelamin" required>
        <option value="L" {{ $pasien->jenis_kelamin === 'L' ? 'selected' : '' }}>L</option>
        <option value="P" {{ $pasien->jenis_kelamin === 'P' ? 'selected' : '' }}>P</option>
    </select>
    <br><br>

    <button type="submit">Simpan Perubahan</button>
</form>
@endsection
