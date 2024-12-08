<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VTD_Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('vtd-login.loginsubmit')}}" method="post">
            @csrf
            <div class="card">
            <div class="card-header">
                <h1>Vũ Tiến Đức-Login</h1>

            </div>
            <div class="card-body">
                <div class="mb-3 form-group">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="vtd@example.com">
                    @error("email")
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3 form-group">
                    <label for="password" class="form-label">password:</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="xxx">
                    @error("password")
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </div>
            </div>
        </div>
        </form>
    </section>
</body>
</html>