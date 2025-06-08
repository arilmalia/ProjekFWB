@extends('resource')

@section('title', 'Lihat User')

@section('content')
<h2>Daftar User</h2>



<table border="1" cellpadding="10">
    <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Role</th>
        <th>Aksi</th>
    </tr>
    @foreach($users as $u)
    <tr>
        <td>{{ $u->name }}</td>
        <td>{{ $u->email }}</td>
        <td>{{ $u->role }}</td>
        <td>
            <a href="{{ url('/edituser/' . $u->id) }}">Edit</a> |
            <a href="{{ url('/hapususer/' . $u->id) }}" onclick="return confirm('Yakin hapus?')">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>

<a href="{{ url('/tambahuser') }}">+ Tambah User</a><br><br>
@endsection
