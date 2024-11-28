<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Welcome to: {{$namemaster}} </p> <!-- lấy dữu liệu từ app/Providers/AppserviceProvider.php  có Thể share cho bất kì trang view nào --> 
    <h1>{{$tt}}</h1>
    <h2>Name: {{$empp['name']}} </h2>
    <h2>Email: {{$empp['Email']}} </h2>
    <h2>Phone: {{$empp['Phone']}} </h2>
</body>
</html>