@extends('resource')

@section('title', 'Daftar Dokter')

@section('content')
<div class="container mt-5 pt-5">
    <div class="card shadow">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold mb-0">Daftar Dokter</h2>
                @if(Auth::check() && (Auth::user()->role == 'admin' || Auth::user()->role == 'dokter'))
                    <a href="{{ url('/tambahdokter') }}" class="btn btn-success">
                        <i class="bi bi-plus-circle me-2"></i>Tambah Dokter
                    </a>
                @endif
            </div>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th class="text-center" style="width: 5%">No</th>
                            <th style="width: 15%">No. Dokter</th>
                            <th style="width: 25%">Nama Lengkap</th>
                            <th style="width: 20%">Spesialis</th>
                            <th style="width: 20%">Email</th>
                            @if(Auth::check() && Auth::user()->role == 'admin')
                            <th style="width: 15%" class="text-center">Aksi</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @if($dokters->isEmpty())
                            <tr>
                                <td colspan="6" class="text-center py-4">
                                    <i class="bi bi-person-badge text-muted d-block" style="font-size: 2rem;"></i>
                                    <p class="text-muted mb-0">Belum ada data dokter</p>
                                </td>
                            </tr>
                        @else
                            @foreach($dokters as $index => $d)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>
                                    <span class="badge bg-info">{{ $d->no_dokter }}</span>
                                </td>
                                <td>
                                    <strong>{{ $d->nama }}</strong>
                                </td>
                                <td>{{ $d->spesialis }}</td>
                                <td>
                                    <small>{{ $d->user->email ?? '-' }}</small>
                                </td>
                                @if(Auth::check() && Auth::user()->role == 'admin')
                                <td class="text-center">
                                    <a href="{{ url('/editdokter/' . $d->id) }}" class="btn btn-sm btn-primary mb-1" title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-danger" 
                                            onclick="if(confirm('Apakah Anda yakin ingin menghapus data dokter ini?')) { window.location.href='{{ url('/hapusdokter/' . $d->id) }}'; }"
                                            title="Hapus">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
