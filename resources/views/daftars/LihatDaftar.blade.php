<!DOCTYPE html>
<html>
<head>
    <title>Data Daftar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h3 class="mb-4">Tabel Daftar</h3>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pasien</th>
                <th>Nama Dokter</th>
                <th>Tanggal Daftar</th>
                <th>Keluhan</th>
                <th>Diagnosis</th>
                <th>Tindakan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($daftars as $df)
            <tr>
                <td>{{ $df->id }}</td>
                <td>{{ $df->pasien->nama ?? '-' }}</td>
                <td>{{ $df->dokter->nama ?? '-' }}</td>
                <td>{{ $df->tanggal_daftar }}</td>
                <td>{{ $df->keluhan }}</td>
                <td>{{ $df->diagnosis }}</td>
                <td>{{ $df->tindakan }}</td>
                <td>
                    <a href="/editdaftar/{{ $df->id }}" class="btn btn-success btn-sm">Edit</a>
                    <a href="/hapusdaftar/{{ $df->id }}" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
