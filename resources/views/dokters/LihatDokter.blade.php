@extends('resource')

@section('content')
<div class="container mt-4">
    <h3 class="mb-4">Tabel Dokter</h3>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>No Dokter</th>
                <th>Nama</th>
                <th>Spesialis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dokter as $dr)
            <tr>
                <td>{{ $dr->id }}</td>
                <td>{{ $dr->no_dokter }}</td>
                <td>{{ $dr->nama }}</td>
                <td>{{ $dr->spesialis }}</td>
                <td>
                    <a href="/editdokter/{{ $dr->id }}" class="btn btn-success btn-sm">Edit</a>
                    <a href="/hapusdokter/{{ $dr->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
