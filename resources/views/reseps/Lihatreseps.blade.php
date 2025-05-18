<!DOCTYPE html>
<html>
<head>
    <title>Data Resep</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h3 class="mb-4">Tabel Resep</h3>
    <table class="table table-bordered table-striped">
        <thead>
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
                    <a href="/hapusrresep/{{ $resep->id }}" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
