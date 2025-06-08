@extends('resource')

@section('title', 'Daftar Resep')

@section('content')
<br>

</br>
<h2>Daftar Resep</h2>
<br>

</br>


<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Pasien</th>
        <th>Daftar</th>
        <th>Nama Obat</th>
        <th>Keterangan</th>
        <th>Aksi</th>
    </tr>
    @foreach($reseps as $index => $r)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $r->pasien->nama ?? '-' }}</td>
        <td>{{ $r->daftar->id ?? '-' }}</td>
        <td>{{ $r->nama_obat }}</td>
        <td>{{ $r->keterangan }}</td>
        <td>
            <a href="{{ url('/editresep/' . $r->id) }}">Edit</a> |
            <a href="{{ url('/hapusresep/' . $r->id) }}" onclick="return confirm('Yakin?')">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
<a href="{{ url('/tambahresep') }}">+ Tambah Resep</a><br>


<br>
@endsection
