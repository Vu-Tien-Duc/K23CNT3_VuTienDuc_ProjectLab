<style>
    h1{
        text-align: center;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        height: 50px;
        line-height: 50px;
        color: red;
        background-color: chartreuse;
    }
    h2{
        text-align: center;
        font-family: 'Times New Roman', Times, serif;
        font-style: italic;
        font-weight: bold;
        height: 50px;
        line-height: 50px;
        color: red;

    }
    ul{
        margin-left: 15px;
    }
</style>
<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <h1>This is Header component</h1>
    <h2>Welcome to,{{$name}}</h2>
    
    <h3>Fruits are: </h3>
    <ul>
        @foreach ($fruits as $item)
            <li>  {{$item}}  </li>
        @endforeach
    </ul>
</div>