<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VTD_Sign</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Include FontAwesome for the eye icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <section class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 my-3">
                <div class="card">
                    <div class="card-header">
                        <h1 style="text-align: center;">Sign Up</h1>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" class="form-control">
                                @error('email')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">Password:</label>
                                <div class="input-group">
                                    <input type="password" name="password" id="password" class="form-control">
                                    <span class="input-group-text" id="togglePassword" style="cursor: pointer;">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                </div>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="confirmpassword">Confirm Password:</label>
                                <div class="input-group">
                                    <input type="password" name="confirmpassword" id="confirmpassword" class="form-control">
                                    <span class="input-group-text" id="toggleConfirmPassword" style="cursor: pointer;">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                </div>
                                @error('confirmpassword')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add JavaScript to toggle password visibility -->
    <script>
        // Toggle visibility for password field
        document.getElementById('togglePassword').addEventListener('click', function (e) {
            const passwordField = document.getElementById('password');
            const type = passwordField.type === 'password' ? 'text' : 'password'; // Toggle between password and text
            passwordField.type = type;

            // Toggle the eye icon
            this.querySelector('i').classList.toggle('fa-eye');
            this.querySelector('i').classList.toggle('fa-eye-slash');
        });

        // Toggle visibility for confirm password field
        document.getElementById('toggleConfirmPassword').addEventListener('click', function (e) {
            const confirmPasswordField = document.getElementById('confirmpassword');
            const type = confirmPasswordField.type === 'password' ? 'text' : 'password'; // Toggle between password and text
            confirmPasswordField.type = type;

            // Toggle the eye icon
            this.querySelector('i').classList.toggle('fa-eye');
            this.querySelector('i').classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>
