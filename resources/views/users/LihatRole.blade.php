@extends('resource')

@section('title', 'Manajemen Role User')

@section('content')
<div class="container mt-5 pt-5">
    <div class="card shadow">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="card-title mb-0">
                    <i class="bi bi-person-badge me-2"></i>Manajemen Role User
                </h2>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead class="table-primary">
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Terdaftar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($logins as $index => $login)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person-circle me-2 text-primary"></i>
                                        {{ $login->name }}
                                    </div>
                                </td>
                                <td>{{ $login->email }}</td>
                                <td>
                                    @php
                                        $badgeClass = [
                                            'admin' => 'bg-danger',
                                            'dokter' => 'bg-success',
                                            'pasien' => 'bg-info'
                                        ][$login->role] ?? 'bg-secondary';
                                    @endphp
                                    <span class="badge {{ $badgeClass }}">
                                        {{ ucfirst($login->role) }}
                                    </span>
                                </td>
                                <td>{{ $login->created_at->format('d M Y, H:i') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-4">
                                    <div class="d-flex flex-column align-items-center">
                                        <i class="bi bi-person-x display-4 text-muted mb-3"></i>
                                        <p class="text-muted mb-0">Belum ada data user</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
.modal-backdrop {
    opacity: 0.5;
}
.modal-open .modal {
    background-color: rgba(0, 0, 0, 0.5);
}
.modal {
    padding-right: 0 !important;
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Hapus modal backdrop yang tersisa saat halaman dimuat
    var existingBackdrops = document.getElementsByClassName('modal-backdrop');
    while(existingBackdrops[0]) {
        existingBackdrops[0].parentNode.removeChild(existingBackdrops[0]);
    }
    
    // Inisialisasi semua modal
    var modals = document.querySelectorAll('.modal');
    modals.forEach(function(modal) {
        modal.addEventListener('show.bs.modal', function() {
            document.body.classList.add('modal-open');
        });
        
        modal.addEventListener('hidden.bs.modal', function() {
            document.body.classList.remove('modal-open');
            var backdrops = document.getElementsByClassName('modal-backdrop');
            while(backdrops[0]) {
                backdrops[0].parentNode.removeChild(backdrops[0]);
            }
        });
    });
});
</script>
@endpush

@endsection
