@extends('resouxrce')

@section('content')
<div class="container mt-4">
    <h3 class="mb-4">Tabel Resep</h3>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama Pasien</th>
                <th>Nama Obat</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reseps as $resep)
            <tr>
                <td>{{ $resep->id }}</td>
                <td>{{ $resep->pasien->nama ?? '-' }}</td>
                <td>{{ $resep->nama_obat }}</td>
                <td>{{ $resep->keterangan }}</td>
                <td>
                    <a href="/editresep/{{ $resep->id }}" class="btn btn-success btn-sm">Edit</a>
                    <a href="/hapusrresep/{{ $resep->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
