@extends('resource')
@section('title', 'Tambah Dokter')

@section('content')


    <h2>Tambah Dokter</h2>
    <form method="post" action="{{ url('/tambahdokter') }}">
    @csrf
    <br>
    </br>


    <label>User:</label>
    <select name="user_id" required>
        @foreach($users as $u)
            <option value="{{ $u->id }}">{{ $u->name}}</option>
        @endforeach
    </select><br><br>

    <label>No Dokter:</label>
    <input type="text" name="no_dokter" required><br><br>

    <label>Nama:</label>
    <input type="text" name="nama" required><br><br>

    <label>Spesialis:</label>
    <input type="text" name="spesialis" required><br><br>

    <button type="submit">Simpan</button>
</form>
@endsection
