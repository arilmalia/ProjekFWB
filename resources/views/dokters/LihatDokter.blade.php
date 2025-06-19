@extends('resource')
@section('title', 'Data Dokter')

@section('content')
<div class="container mt-5 pt-5 style="padding-top: 100px;">
    <h2 class="text-center mb-4 fw-bold">Data Dokter</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No Dokter</th>
                <th>Spesialis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dokters as $i => $d)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->no_dokter }}</td>
                <td>{{ $d->spesialis }}</td>
                <td>
                    <a href="{{ url('/editdokter/' . $d->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="{{ url('/hapusdokter/' . $d->id) }}" class="btn btn-sm btn-danger"
                       onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ url('/tambahdokter') }}" class="btn btn-success mt-3">Tambah Dokter</a>
</div>
@endsection
