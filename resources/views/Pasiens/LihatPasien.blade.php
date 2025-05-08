<!DOCTYPE html>
<html>
<head>
    <title>Data Pasien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h3 class="mb-4">Tabel Pasien</h3>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>No Pasien</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pasien as $pn)
            <tr>
                <td>{{ $pn->id }}</td>
                <td>{{ $pn->no_pasien }}</td>
                <td>{{ $pn->nama }}</td>
                <td>{{ $pn->umur }}</td>
                <td>{{ $pn->jenis_kelamin }}</td>
                <td>
                    <a href="/editpasien/{{ $pn->id }}" class="btn btn-success btn-sm">Edit</a>
                    <a href="/hapuspasien/{{ $pn->id }}" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>