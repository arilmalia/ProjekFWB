@extends('resource')

@section('title', 'Data Login')

@section('content')

<br>
</br>  
    <h2>Data Login</h2>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Password</th>
                <th>Email</th>
                <th>Role</th>
                <th>Dibuat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logins as $login)
                <tr>
                    <td>{{ $login->id }}</td>
                    <td>{{ $login->name }}</td>
                    <td>{{ $login->password }}</td>
                    <td>{{ $login->email }}</td>
                    <td>{{ $login->role }}</td>
                    <td>{{ $login->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
