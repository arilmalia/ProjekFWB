@extends('resource')
@section('title', 'Data Login')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Data Login</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logins as $index => $login)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $login->name }}</td>
                <td>{{ $login->email }}</td>
                <td>{{ $login->role }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
