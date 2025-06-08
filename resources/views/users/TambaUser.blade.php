@extends('resource')

@section('title', 'Tambah User')

@section('content')
<br>
<br>
<h2>Tambah User</h2>
<form method="POST" action="{{ url('/tambahuser') }}">
    @csrf

    <label>Nama:</label>
    <input type="text" name="name" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" required><br><br>

    <label>Password:</label>
    <input type="password" name="password" required><br><br>

    <label>Role:</label>
    <select name="role" required>
        <option value="admin">Admin</option>
        <option value="dokter">Dokter</option>
        <option value="pasien">Pasien</option>
    </select><br><br>

    <button type="submit">Tambah User</button>
</form>
@endsection
