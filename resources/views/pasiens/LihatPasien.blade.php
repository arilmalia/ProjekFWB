@extends('resource')
@section('title', 'Data Pasien')

@section('content')
<br></br>
<h2>Data Pasien</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>No Pasien</th>
        <th>Umur</th>
        <th>Jenis Kelamin</th>
        <th>Aksi</th>
    </tr>
    @foreach($pasiens as $i => $p)
    <tr>
        <td>{{ $i + 1 }}</td>
        <td>{{ $p->nama }}</td>
        <td>{{ $p->no_pasien }}</td>
        <td>{{ $p->umur }}</td>
        <td>{{ $p->jenis_kelamin }}</td>
        <td>
            <a href="{{ url('/editpasien/' . $p->id) }}">Edit</a> |
            <a href="{{ url('/hapuspasien/' . $p->id) }}" onclick="return confirm('Yakin?')">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
<a href="{{ url('/tambahpasien') }}">Tambah Pasien</a>
@endsection
