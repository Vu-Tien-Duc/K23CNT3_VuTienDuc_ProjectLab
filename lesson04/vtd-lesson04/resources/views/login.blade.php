<form method="POST" action="{{route('login.submit')}}">
    @csrf
    <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" class="form-control">
    @error('email')
    <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
    <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control"
    name="password" id="password" value="12346a@">
    @error('password')
    <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>