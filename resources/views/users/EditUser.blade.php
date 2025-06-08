@extends('resource')

@section('title', 'Edit User')

@section('content')
<h2>Edit User</h2>
<form method="POST" action="{{ url('/edituser/' . $user->id) }}">
    @csrf

    <label>Nama:</label>
    <input type="text" name="name" value="{{ $user->name }}" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" value="{{ $user->email }}" required><br><br>

    <label>Password (opsional):</label>
    <input type="password" name="password"><br><br>

    <label>Role:</label>
    <select name="role" required>
        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
        <option value="dokter" {{ $user->role == 'dokter' ? 'selected' : '' }}>Dokter</option>
        <option value="pasien" {{ $user->role == 'pasien' ? 'selected' : '' }}>Pasien</option>
    </select><br><br>

    <button type="submit">Simpan Perubahan</button>
</form>
@endsection
