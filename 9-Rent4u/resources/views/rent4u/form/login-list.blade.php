<!-- resources/views/login-list.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Login List</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
<h1>Login Records</h1>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1" cellpadding="8">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
    </tr>
    </thead>
    <tbody>
    @foreach($logins as $login)
        <tr>
            <td>{{ $login->id }}</td>
            <td>{{ $login->name }}</td>
            <td>{{ $login->email }}</td>
            <td>{{ $login->password }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
