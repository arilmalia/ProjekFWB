@extends('resource')

@section('title', 'Daftar Pasien')

@section('content')
<div class="container mt-5 pt-5">
    <div class="card shadow">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold mb-0">Daftar Pasien</h2>
                @if(Auth::check() && (Auth::user()->role == 'admin' || Auth::user()->role == 'pasien'))
                    <a href="{{ url('/tambahpasien') }}" class="btn btn-success">
                        <i class="bi bi-plus-circle me-2"></i>Tambah Pasien
                    </a>
                @endif
            </div>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th class="text-center" style="width: 5%">No</th>
                            <th style="width: 15%">No. Pasien</th>
                            <th style="width: 25%">Nama Lengkap</th>
                            <th style="width: 10%">Umur</th>
                            <th style="width: 15%">Jenis Kelamin</th>
                            <th style="width: 15%">Email</th>
                            @if(Auth::check() && Auth::user()->role == 'admin')
                            <th style="width: 15%" class="text-center">Aksi</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @if($pasiens->isEmpty())
                            <tr>
                                <td colspan="7" class="text-center py-4">
                                    <i class="bi bi-people text-muted d-block" style="font-size: 2rem;"></i>
                                    <p class="text-muted mb-0">Belum ada data pasien</p>
                                </td>
                            </tr>
                        @else
                            @foreach($pasiens as $index => $p)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>
                                    <span class="badge bg-info">{{ $p->no_pasien }}</span>
                                </td>
                                <td>
                                    <strong>{{ $p->nama }}</strong>
                                </td>
                                <td>{{ $p->umur }} tahun</td>
                                <td>
                                    @if($p->jenis_kelamin == 'Laki-laki')
                                        <i class="bi bi-gender-male text-primary"></i>
                                    @else
                                        <i class="bi bi-gender-female text-danger"></i>
                                    @endif
                                    {{ $p->jenis_kelamin }}
                                </td>
                                <td>
                                    <small>{{ $p->user->email ?? '-' }}</small>
                                </td>
                                @if(Auth::check() && Auth::user()->role == 'admin')
                                <td class="text-center">
                                    <a href="{{ url('/editpasien/' . $p->id) }}" class="btn btn-sm btn-primary mb-1" title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-danger" 
                                            onclick="if(confirm('Apakah Anda yakin ingin menghapus data pasien ini?')) { window.location.href='{{ url('/hapuspasien/' . $p->id) }}'; }"
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
