<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservation Request</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <section class="container my-5">
        <form action="{{route('vtd-assignment3.store')}}" method="post">
            @csrf
            <div class="card shadow-lg">
                <div class="card-header text-center">
                    <h1 class="mb-0">Reservation Request</h1>
                </div>
                <div class="card-body">
                    <!-- User Info Section -->
                    <div class="mb-4">
                        <fieldset class="border p-3 rounded">
                            <legend class="w-auto px-2">Thông tin người dùng</legend>
                            <div class="form-group mb-3">
                                <label for="arrival_date">Arrival date:</label>
                                <input type="date" id="arrival_date" name="arrival_date" class="form-control" value="{{ old('arrival_date') }}">
                                @error('arrival_date')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="nights">Nights:</label>
                                <input type="text" id="nights" name="nights" class="form-control" placeholder="Nhập số đêm..." value="{{ old('nights') }}">
                                @error('nights')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="adults">Adults:</label>
                                <input type="number" id="adults" name="adults" class="form-control" value="{{ old('adults') }}">
                                @error('adults')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="children">Children:</label>
                                <input type="number" id="children" name="children" class="form-control" value="{{ old('children') }}">
                                @error('children')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </fieldset>
                    </div>

                    <!-- Options Section -->
                    <div class="mb-4">
                        <fieldset class="border p-3 rounded">
                            <legend class="w-auto px-2">Tùy chọn</legend>
                            <div class="form-group mb-3">
                                <label>Room Type:</label><br>
                                <label class="me-3">
                                    <input type="radio" name="room_type" value="standard" {{ old('room_type') == 'standard' ? 'checked' : '' }}> Standard
                                </label>
                                <label class="me-3">
                                    <input type="radio" name="room_type" value="business" {{ old('room_type') == 'business' ? 'checked' : '' }}> Business
                                </label>
                                <label class="me-3">
                                    <input type="radio" name="room_type" value="suite" {{ old('room_type') == 'suite' ? 'checked' : '' }}> Suite
                                </label>
                                @error('room_type')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label>Bed Type:</label><br>
                                <label class="me-3">
                                    <input type="radio" name="bed_type" value="king" {{ old('bed_type') == 'king' ? 'checked' : '' }}> King
                                </label>
                                <label class="me-3">
                                    <input type="radio" name="bed_type" value="double double" {{ old('bed_type') == 'double double' ? 'checked' : '' }}> Double Double
                                </label>
                                @error('bed_type')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="smoking">
                                    <input type="hidden" name="smoking" value="0">
                                    <input type="checkbox" name="smoking" id="smoking" value="1" {{ old('smoking') ? 'checked' : '' }}> Smoking
                                </label>
                                @error('smoking')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </fieldset>
                    </div>

                    <!-- Registration Information Section -->
                    <div class="mb-4">
                        <fieldset class="border p-3 rounded">
                            <legend class="w-auto px-2">Thông tin Đăng Ký</legend>

                            <div class="form-group mb-3">
                                <label for="name">Name:</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Please enter your name" value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Please enter your Email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="phone">Phone:</label>
                                <input type="tel" name="phone" id="phone" class="form-control" placeholder="Please enter your Phone" value="{{ old('phone') }}">
                            </div>
                        </fieldset>
                    </div>
                </div>

                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary">Submit Reservation</button>
                    <button type="reset" class="btn btn-secondary">Clear</button>
                </div>
            </div>
        </form>
    </section>
</body>
</html>
