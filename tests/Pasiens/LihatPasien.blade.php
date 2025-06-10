@extends('resource')

@section('title', 'Data Pasien')

@section('content')
<br>

</br>
<h2>Data Pasien</h2>

@if(session('success'))
    <div style="color: green;">{{ session('success') }}</div>
@endif


<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>User</th>
            <th>No Pasien</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pasiens as $index => $pasien)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $pasien->user->name ?? '-' }}</td>
            <td>{{ $pasien->no_pasien }}</td>
            <td>{{ $pasien->nama }}</td>
            <td>{{ $pasien->umur }}</td>
            <td>{{ $pasien->jenis_kelamin }}</td>
            <td>
                <a href="{{ url('/editpasien/' . $pasien->id) }}">Edit</a> | 
                <a href="{{ url('/hapuspasien/' . $pasien->id) }}" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ url('/tambahpasien') }}">Tambah Pasien</a>


@endsection
