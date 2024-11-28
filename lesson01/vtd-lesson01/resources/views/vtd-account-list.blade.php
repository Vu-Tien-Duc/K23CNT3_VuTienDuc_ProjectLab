<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing='0' cellpadding='10px'>
    <thead>
        <tr>
            <th>#</th>
            <th>id</th>
            <th>name</th>
            <th>password</th>
        </tr>
    </thead>
    <tbody>
        @php
            $stt=0;
        @endphp
            @foreach ($list as $item)
                @php
                    $stt++;
                @endphp
                <tr>
                    <td>{{$stt}}</td>
                    <td>{{$item['id']}}</td>
                    <td>{{$item['Name']}}</td>
                    <td>{{$item['password']}}</td>
                </tr>
            @endforeach
       
    </tbody>
</table>
</body>
</html>