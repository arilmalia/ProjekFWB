@extends('resource')
@section('title', 'Tambah Daftar')

@section('content')
<br>

</br>
<h2>Tambah Pendaftaran</h2>
<form method="post" action="{{ url('/tambahdaftar') }}">
    @csrf

    <label>Pasien:</label>
    <select name="pasien_id" required>
        @foreach ($pasiens as $p)
            <option value="{{ $p->id }}">{{ $p->nama }}</option>
        @endforeach
    </select><br><br>

    <label>Dokter:</label>
    <select name="dokter_id" required>
        @foreach ($dokters as $d)
            <option value="{{ $d->id }}">{{ $d->nama }}</option>
        @endforeach
    </select><br><br>

    <label>Tanggal Daftar:</label>
    <input type="date" name="tanggal_daftar" required><br><br>

    <label>Keluhan:</label>
    <input type="text" name="keluhan" required><br><br>

    <label>Diagnosis:</label>
    <input type="text" name="diagnosis"><br><br>

    <label>Tindakan:</label>
    <input type="text" name="tindakan"><br><br>

    <button type="submit">Simpan</button>
</form>
@endsection
