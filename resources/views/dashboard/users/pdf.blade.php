<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pengguna</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Daftar Pengguna</h2>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Username</th>
                <th>Nomor Induk</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->nomor_induk }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
