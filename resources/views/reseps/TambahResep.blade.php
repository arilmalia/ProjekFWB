@extends('resource')

@section('title', 'Tambah Resep')

@section('content')
<br>

</br>

<h2>Tambah Resep</h2>

<form method="post" action="{{ url('/tambahresep') }}">
    @csrf

    <label>Pasien:</label>
    <select name="pasien_id" required>
        @foreach($pasiens as $p)
            <option value="{{ $p->id }}">{{ $p->nama }}</option>
        @endforeach
    </select><br><br>

    <label>Daftar:</label>
    <select name="daftar_id" required>
        @foreach($daftars as $d)
            <option value="{{ $d->id }}">{{ $d->id }}</option>
        @endforeach
    </select><br><br>

    <label>Nama Obat:</label>
    <input type="text" name="nama_obat" required><br><br>

    <label>Keterangan:</label>
    <textarea name="keterangan" required></textarea><br><br>

    <button type="submit">Tambah Resep</button>
</form>
@endsection
