@extends('resource')
@section('title', 'Daftar')

@section('content')
<br>

</br>
<div>
<h2>Data Pendaftaran</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Pasien</th>
        <th>Dokter</th>
        <th>Tanggal</th>
        <th>Keluhan</th>
        <th>Diagnosis</th>
        <th>Tindakan</th>
        <th>Aksi</th>
    </tr>
    @foreach ($daftar as $item)
    <tr>
        <td>{{ $item->pasien->nama }}</td>
        <td>{{ $item->dokter->nama }}</td>
        <td>{{ $item->tanggal_daftar }}</td>
        <td>{{ $item->keluhan }}</td>
        <td>{{ $item->diagnosis }}</td>
        <td>{{ $item->tindakan }}</td>
        <td>
            <a href="{{ url('/editdaftar/' . $item->id) }}">Edit</a> |
            <a href="{{ url('/hapusdaftar/' . $item->id) }}" onclick="return confirm('Hapus data ini?')">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>


<a href="{{ url('/tambahdaftar') }}">Tambah Pendaftaran</a>
</div>
@endsection
