@extends('resource')

@section('title', 'Daftar Resep')

@section('content')
<div class="container mt-5 pt-5">
    <div class="card shadow">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold mb-0">Daftar Resep Obat</h2>
                @if(Auth::check() && Auth::user()->role != 'pasien')
                    <a href="{{ url('/tambahresep') }}" class="btn btn-success">
                        <i class="bi bi-plus-circle me-2"></i>Tambah Resep
                    </a>
                @endif
            </div>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th class="text-center" style="width: 5%">No</th>
                            <th style="width: 20%">Pasien</th>
                            <th style="width: 15%">No. Pendaftaran</th>
                            <th style="width: 20%">Nama Obat</th>
                            <th style="width: 25%">Aturan Pakai</th>
                            <th style="width: 15%" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($reseps->isEmpty())
                            <tr>
                                <td colspan="6" class="text-center py-4">
                                    <i class="bi bi-inbox text-muted d-block" style="font-size: 2rem;"></i>
                                    <p class="text-muted mb-0">Belum ada data resep</p>
                                </td>
                            </tr>
                        @else
                            @foreach($reseps as $index => $r)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>
                                    <strong>{{ $r->pasien->nama ?? '-' }}</strong><br>
                                    <small class="text-muted">No. {{ $r->pasien->no_pasien ?? '-' }}</small>
                                </td>
                                <td>
                                    <span class="badge bg-info">{{ $r->daftar->id ?? '-' }}</span><br>
                                    <small class="text-muted">{{ $r->daftar ? date('d/m/Y', strtotime($r->daftar->created_at)) : '-' }}</small>
                                </td>
                                <td><strong>{{ $r->nama_obat }}</strong></td>
                                <td>{{ $r->keterangan }}</td>
                                <td class="text-center">
                                    @if(Auth::check() && Auth::user()->role != 'pasien')
                                        <a href="{{ url('/editresep/' . $r->id) }}" class="btn btn-sm btn-primary mb-1" title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-danger" 
                                                onclick="if(confirm('Apakah Anda yakin ingin menghapus resep ini?')) { window.location.href='{{ url('/hapusresep/' . $r->id) }}'; }"
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
