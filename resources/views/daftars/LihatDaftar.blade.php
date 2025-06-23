@extends('resource')

@section('title', 'Daftar Konsultasi')

@section('content')
<div class="container mt-5 pt-5">
    <div class="card shadow">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold mb-0">Daftar Konsultasi</h2>
                @if(Auth::check() && Auth::user()->role != 'pasien')
                    <a href="{{ url('/tambahdaftar') }}" class="btn btn-success">
                        <i class="bi bi-plus-circle me-2"></i>Tambah Konsultasi
                    </a>
                @endif
            </div>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th class="text-center" style="width: 5%">No</th>
                            <th style="width: 20%">Pasien</th>
                            <th style="width: 20%">Dokter</th>
                            <th style="width: 15%">Tanggal</th>
                            <th style="width: 20%">Keluhan</th>
                            <th style="width: 15%">Diagnosis</th>
                            <th style="width: 15%">Tindakan</th>
                            <th style="width: 20%" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($daftars->isEmpty())
                            <tr>
                                <td colspan="6" class="text-center py-4">
                                    <i class="bi bi-calendar2-plus text-muted d-block" style="font-size: 2rem;"></i>
                                    <p class="text-muted mb-0">Belum ada data konsultasi</p>
                                </td>
                            </tr>
                        @else
                            @foreach($daftars as $index => $d)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>
                                    <strong>{{ $d->pasien->nama ?? '-' }}</strong><br>
                                    <small class="text-muted">No. {{ $d->pasien->no_pasien ?? '-' }}</small>
                                </td>
                                <td>
                                    <strong>{{ $d->dokter->nama ?? '-' }}</strong><br>
                                    <small class="text-muted">{{ $d->dokter->spesialis ?? '-' }}</small>
                                </td>
                                <td>
                                    <span class="badge bg-info">{{ date('d/m/Y', strtotime($d->created_at)) }}</span><br>
                                    <small class="text-muted">{{ date('H:i', strtotime($d->created_at)) }} WIB</small>
                                </td>
                                <td>{{ $d->keluhan }}</td>
                                <td>{{ $d->diagnosis }}</td>
                                <td>{{ $d->tindakan }}</td>
                                <td class="text-center">
                                    @if(Auth::check() && Auth::user()->role != 'pasien')
                                        <a href="{{ url('/editdaftar/' . $d->id) }}" class="btn btn-sm btn-primary mb-1" title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-danger" 
                                                onclick="if(confirm('Apakah Anda yakin ingin menghapus data konsultasi ini?')) { window.location.href='{{ url('/hapusdaftar/' . $d->id) }}'; }"
                                                title="Hapus">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    @endif
                                </td>
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
