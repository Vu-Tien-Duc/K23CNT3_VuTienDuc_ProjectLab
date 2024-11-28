<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>#Loops: Cấu trúc lặp [foreach, forelse, while,...]</h1>
    <hr>

     /* Hiển Thị Giá Trị Của $i Từ 1 Đến 4 */
    @for( $i = 1 ; $i < 5 ; $i++ )
        <p> Giá Trị Của I là: {{$i}}
    @endfor
    <hr>
    /* Hiển thị giá trị naem của mảng array
    @foreach($name as $item)
        <p> This is Name: {{$item}}
    @endforeach
    <hr>
    /* hiển thị giá trị users  nếu không có Giá trị Hiện no uses */
    -- empty là nếu mảng trống thì báo
    @forelse($users as $user)
        <li> {{$user}} </li>
        @empty 
        <p> no uses</P>
    @endforelse

    @php 
    $i = 0;
    @endphp

    @while ( $i < 5 )
        <p?> Curent @$i = {{$i}} </p>
        @php
            $i++;
        @endphp
    @endwhile
    <hr>

    @foreach ($arr as $item)
        @if ($loop->first)
            @continue
        @endif
        @if ($loop->last)
            <p> This is the last iteration.
        @endif
        <li>{{ $item }}</li>
    @endforeach
</body>
</html>