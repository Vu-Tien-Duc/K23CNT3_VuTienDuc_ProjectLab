<!-- resources/views/account-list.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<section></section>
<table class="table table-borfered">
    <thead>
        <tr>
            <th>#</th>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Full Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach($list as $account)
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