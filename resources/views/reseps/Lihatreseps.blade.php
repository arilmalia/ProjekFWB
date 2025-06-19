@extends('resource')

@section('title', 'Daftar Resep')

@section('content')
<div class="container mt-5 pt-5 style="padding-top: 100px;">
    <h2 class="text-center mb-4 fw-bold">Daftar Resep</h2>

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
                    @if(Auth::check() && Auth::user()->role != 'pasien')
                        <a href="{{ url('/editresep/' . $r->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{ url('/hapusresep/' . $r->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @if(Auth::check() && Auth::user()->role != 'pasien')
        <a href="{{ url('/tambahresep') }}" class="btn btn-success mt-3">+ Tambah Resep</a>
    @endif
</div>
@endsection
