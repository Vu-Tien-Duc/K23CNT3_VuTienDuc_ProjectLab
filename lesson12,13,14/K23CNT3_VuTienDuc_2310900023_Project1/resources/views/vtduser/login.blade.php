<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Đăng Nhập</title>
    <style>
        body {
            background-color: #f8f9fa; /* Light background for the entire page */
        }
        .form-container {
            background-color: #ffffff; /* White background for the form */
            border-radius: 12px; /* Rounded corners for the form */
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1); /* Stronger shadow for the form */
            padding: 40px 30px; /* Padding inside the form */
            max-width: 400px;
            margin: auto;
        }
        .form-container h2 {
            font-size: 2rem;
            color: #495057;
            margin-bottom: 30px;
        }
        .form-group label {
            font-weight: 600;
            color: #495057;
        }
        .form-group input {
            border-radius: 8px;
            padding: 12px 16px;
            font-size: 1rem;
        }
        .form-group .is-invalid {
            border-color: #e74a3b;
        }
        .invalid-feedback {
            font-size: 0.875rem;
            color: #e74a3b;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 8px;
            padding: 12px;
            font-size: 1.1rem;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .mt-3 a {
            text-decoration: none;
            color: #007bff;
        }
        .mt-3 a:hover {
            text-decoration: underline;
        }
        @media (max-width: 576px) {
            .form-container {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="form-container">
        <h2 class="text-center mb-4">Đăng Nhập</h2>

        <!-- Display errors from backend if validation fails -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('vtduser.vtdLoginSubmit') }}">
            @csrf

            <div class="form-group mb-3">
                <label for="vtdEmail">Email</label>
                <input type="email" class="form-control @error('vtdEmail') is-invalid @enderror" 
                       id="vtdEmail" name="vtdEmail" value="{{ old('vtdEmail') }}" required>
                @error('vtdEmail')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="vtdMatKhau">Mật Khẩu</label>
                <input type="password" class="form-control @error('vtdMatKhau') is-invalid @enderror" 
                       id="vtdMatKhau" name="vtdMatKhau" required>
                @error('vtdMatKhau')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary btn-lg w-100">Đăng Nhập</button>
        </form>

        <div class="mt-3 text-center">
            <p>Chưa có tài khoản? <a href="{{ route('vtduser.vtdsignup') }}">Đăng ký ngay</a></p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
