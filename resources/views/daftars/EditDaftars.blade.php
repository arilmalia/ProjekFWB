@extends('resource')
@section('title', 'Edit Daftar')

@section('content')
<br>

</br>
<h2>Edit Pendaftaran</h2>
<form method="post" action="{{ url('/editdaftar/' . $daftar->id) }}">
    @csrf

    <label>Pasien:</label>
    <select name="pasien_id" required>
        @foreach ($pasiens as $p)
            <option value="{{ $p->id }}" {{ $daftar->pasien_id == $p->id ? 'selected' : '' }}>{{ $p->nama }}</option>
        @endforeach
    </select><br><br>

    <label>Dokter:</label>
    <select name="dokter_id" required>
        @foreach ($dokters as $d)
            <option value="{{ $d->id }}" {{ $daftar->dokter_id == $d->id ? 'selected' : '' }}>{{ $d->nama }}</option>
        @endforeach
    </select><br><br>

    <label>Tanggal Daftar:</label>
    <input type="date" name="tanggal_daftar" value="{{ $daftar->tanggal_daftar }}" required><br><br>

    <label>Keluhan:</label>
    <input type="text" name="keluhan" value="{{ $daftar->keluhan }}" required><br><br>

    <label>Diagnosis:</label>
    <input type="text" name="diagnosis" value="{{ $daftar->diagnosis }}"><br><br>

    <label>Tindakan:</label>
    <input type="text" name="tindakan" value="{{ $daftar->tindakan }}"><br><br>

    <button type="submit">Update</button>
</form>
@endsection
