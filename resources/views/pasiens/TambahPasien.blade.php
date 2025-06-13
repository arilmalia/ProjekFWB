@extends('resource')
@section('title', 'Tambah Pasien')

@section('content')
<br></br>
<h2>Tambah Pasien</h2>
<form method="post" action="{{ url('/tambahpasien') }}">
    @csrf
    <label>User:</label>
    <select name="user_id" required>
        @foreach($users as $u)
            <option value="{{ $u->id }}">{{ $u->name }}</option>
        @endforeach
    </select><br><br>

    <label>No Pasien:</label>
    <input type="text" name="no_pasien" required><br><br>

    <label>Nama:</label>
    <input type="text" name="nama" required><br><br>

    <label>Umur:</label>
    <input type="number" name="umur" required><br><br>

    <label>Jenis Kelamin:</label>
    <select name="jenis_kelamin" required>
        <option value="">-- Pilih --</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select><br><br>

    <button type="submit">Simpan</button>
</form>
@endsection
