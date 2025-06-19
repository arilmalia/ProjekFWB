@extends('resource')
@section('title', 'Data Pasien')

@section('content')
<div class="container mt-5 pt-5 style="padding-top: 100px;">
    <h2 class="text-center mb-4 fw-bold">Data Pasien</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No Pasien</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pasiens as $i => $p)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->no_pasien }}</td>
                <td>{{ $p->umur }}</td>
                <td>{{ $p->jenis_kelamin }}</td>
                <td>
                    @if(Auth::check() && Auth::user()->role != 'pasien')
                        <a href="{{ url('/editpasien/' . $p->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{ url('/hapuspasien/' . $p->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ url('/tambahpasien') }}" class="btn btn-success mt-3">Tambah Pasien</a>
</div>
@endsection
