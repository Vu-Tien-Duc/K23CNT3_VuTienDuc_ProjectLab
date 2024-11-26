<!-- resources/views/account-list.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
</head>
<body>

<table border='1' cellspacing='0' cellpadding='10px'>
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Full Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $account)
        <tr>
            <td>{{ $account['id'] }}</td>
            <td>{{ $account['username'] }}</td>
            <td>{{ $account['password'] }}</td>
            <td>{{ $account['fullname'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>