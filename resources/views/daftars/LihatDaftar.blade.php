@extends('resource')
@section('title', 'Data Pendaftaran')

@section('content')
<div class="container mt-5 pt-5 style="padding-top: 100px;">
    <h2 class="text-center mb-4 fw-bold">Data Pendaftaran</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Pasien</th>
                <th>Dokter</th>
                <th>Tanggal</th>
                <th>Keluhan</th>
                <th>Diagnosis</th>
                <th>Tindakan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($daftar as $item)
            <tr>
                <td>{{ $item->pasien->nama }}</td>
                <td>{{ $item->dokter->nama }}</td>
                <td>{{ $item->tanggal_daftar }}</td>
                <td>{{ $item->keluhan }}</td>
                <td>{{ $item->diagnosis }}</td>
                <td>{{ $item->tindakan }}</td>
                <td>
                    <a href="{{ url('/editdaftar/' . $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="{{ url('/hapusdaftar/' . $item->id) }}" class="btn btn-sm btn-danger"
                       onclick="return confirm('Hapus data ini?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ url('/tambahdaftar') }}" class="btn btn-success mt-3">Tambah Pendaftaran</a>
</div>
@endsection
