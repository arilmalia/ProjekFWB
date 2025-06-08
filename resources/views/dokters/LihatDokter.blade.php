@extends('resource')
@section('title', 'Data Dokter')

@section('content')
<br>

</br>
<h2>Data Dokter</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>No Dokter</th>
        <th>Spesialis</th>
        <th>Aksi</th>
    </tr>
    @foreach($dokters as $i => $d)
    <tr>
        <td>{{ $i + 1 }}</td>
        <td>{{ $d->nama }}</td>
        <td>{{ $d->no_dokter }}</td>
        <td>{{ $d->spesialis }}</td>
        <td>
            <a href="{{ url('/editdokter/' . $d->id) }}">Edit</a> |
            <a href="{{ url('/hapusdokter/' . $d->id) }}" onclick="return confirm('Yakin?')">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
<a href="{{ url('/tambahdokter') }}">Tambah Dokter</a>
@endsection
