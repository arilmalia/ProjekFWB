@extends('resource')

@section('title', 'Edit Resep')

@section('content')
<br>

</br>
<h2>Edit Resep</h2>
<form method="post" action="{{ url('/editresep/' . $resep->id) }}">
    @csrf

    <label>Pasien:</label>
    <select name="pasien_id" required>
        @foreach($pasiens as $p)
            <option value="{{ $p->id }}" {{ $p->id == $resep->pasien_id ? 'selected' : '' }}>{{ $p->nama }}</option>
        @endforeach
    </select><br><br>

    <label>Daftar:</label>
    <select name="daftar_id" required>
        @foreach($daftars as $d)
            <option value="{{ $d->id }}" {{ $d->id == $resep->daftar_id ? 'selected' : '' }}>{{ $d->id }}</option>
        @endforeach
    </select><br><br>

    <label>Nama Obat:</label>
    <input type="text" name="nama_obat" value="{{ $resep->nama_obat }}" required><br><br>

    <label>Keterangan:</label>
    <textarea name="keterangan" required>{{ $resep->keterangan }}</textarea><br><br>

    <button type="submit">Simpan Perubahan</button>
</form>
@endsection
