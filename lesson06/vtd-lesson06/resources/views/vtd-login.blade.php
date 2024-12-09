<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VTD-Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('vtdaccount.vtdSubmitLogin')}}" method="POST">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h1>VTD-Login</h1>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="vtdemail@gmail.com">
                        @error("email")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
    
                    </div>

                    <div class="form-group">
                        <label for="password">password:</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="xxx">
                        @error("password")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
    
                    </div>
                </div>

                <div class="card-footer">
                    <button class="btn btn-primary">submit</button>

                    @if(Session::has('vtd-error'))
                    <div class="alert alert-danger">
                        {{Session::get('vtd-error')}}

                    </div>
                    @endif

                    
                </div>
            </div>
        </form>
    </section>
</body>
</html>