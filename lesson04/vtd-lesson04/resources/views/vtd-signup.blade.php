<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></head>
<body>
    <section class="container my-3">
    <form method="POST" action="{{route('signup.submit')}}">
        @csrf
        <div class="card">
            <div class="card-header">
                <h1>#Registration Form</h1>
            </div>
            <div class="card-body">
                <div class="form-group">
                <label for="id">User ID:</label>
                <input type="text" name="id" id="id" class="form-control" value="{{ old('id') }}">
                @error('id')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control">
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="name">Name:</label>
               <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
               @error('name')
               <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}">
                @error('address')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

        <!-- Chỉnh sửa thành dropdown list cho quốc gia -->
            <div class="form-group">
                <label for="country">Country:</label>
                <select name="country" id="country" class="form-control">
                   <option value="">Please select a country</option>
                   <option value="VIETNAM" {{ old('country') == 'VIETNAM' ? 'selected' : '' }}>Vietnam</option>
                    <option value="US" {{ old('country') == 'US' ? 'selected' : '' }}>United States</option>
                    <option value="UK" {{ old('country') == 'UK' ? 'selected' : '' }}>United Kingdom</option>
                    <option value="CHINA" {{ old('country') == 'CHINA' ? 'selected' : '' }}>China</option>
                    <option value="JAPAN" {{ old('country') == 'JAPAN' ? 'selected' : '' }}>Japan</option>
                    <option value="INDONESIA" {{ old('country') == 'INDONESIA' ? 'selected' : '' }}>Indonesia</option>
                    <option value="PHILIPIN" {{ old('country') == 'PHILIPIN' ? 'selected' : '' }}>Philippines</option>
                </select>
                @error('country')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="zipcode">ZIP Code:</label>
                <input type="number" name="zipcode" id="zipcode" class="form-control" value="{{ old('zipcode') }}">
                @error('zipcode')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
               <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label>Sex:</label>
                <label>
                    <input type="radio" name="sex" value="Male" {{ old('sex') == 'Male' ? 'checked' : '' }}> Male
                </label>
                <label>
                    <input type="radio" name="sex" value="Female" {{ old('sex') == 'Female' ? 'checked' : '' }}> Female
                </label>
                @error('sex')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="language">Language:</label>
                <label>
                    <input type="checkbox" name="language" value="English" {{ old('language') == 'English' ? 'checked' : '' }}> English
                </label>
                <label>
                    <input type="checkbox" name="language" value="Non English" {{ old('language') == 'Non English' ? 'checked' : '' }}> Non English
                </label>
                @error('language')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="about">About:</label>
                <input type="text" name="about" id="about" class="form-control" value="{{ old('about') }}">
                @error('about')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </div>
    </div>
    </form>
    </section>
</body>
</html>
