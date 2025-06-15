@extends('resource')

@section('title', 'Daftar Resep')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Daftar Resep</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Pasien</th>
                <th>Daftar</th>
                <th>Nama Obat</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reseps as $index => $r)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $r->pasien->nama ?? '-' }}</td>
                <td>{{ $r->daftar->id ?? '-' }}</td>
                <td>{{ $r->nama_obat }}</td>
                <td>{{ $r->keterangan }}</td>
                <td>
                    <a href="{{ url('/editresep/' . $r->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="{{ url('/hapusresep/' . $r->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ url('/tambahresep') }}" class="btn btn-success mt-3">+ Tambah Resep</a>
</div>
@endsection
