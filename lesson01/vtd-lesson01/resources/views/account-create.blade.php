<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: 'Arial', sans-serif;
        background: linear-gradient(#141e30, #243b55);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }

      .wrap {
        width: 400px;
        padding: 40px;
        background: rgba(0, 0, 0, 0.8);
        border-radius: 10px;
        box-shadow: 0 5px 30px rgba(0, 0, 0, 0.6);
        box-sizing: border-box;
      }

      .wrap h1 {
        text-transform: uppercase;
        color: #fff;
        text-align: center;
        margin-bottom: 30px;
        font-size: 24px;
      }

      .wrap .user-box {
        position: relative;
        margin-bottom: 20px;
      }

      .wrap input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
        transition: 0.3s;
      }

      .wrap .user-box label {
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: 0.3s;
      }

      .wrap .user-box input:focus ~ label,
      .wrap .user-box input:valid ~ label {
        top: -20px;
        left: 0;
        color: aqua;
        font-size: 12px;
      }

      .wrap .login {
        width: 100%;
        padding: 10px 20px;
        color: #fff;
        font-size: 16px;
        text-transform: uppercase;
        background: #243b55;
        border: none;
        cursor: pointer;
        transition: 0.3s;
        margin-top: 20px;
      }

      .wrap .login:hover {
        background: aqua;
        color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 5px aqua, 0 0 25px aqua, 0 0 50px aqua;
      }

      .wrap a {
        display: block;
        text-align: center;
        margin-top: 15px;
        text-decoration: none;
        color: rgb(132, 255, 255);
        transition: 0.3s;
      }

      .wrap a:hover {
        text-decoration: underline;
        color: #fff;
      }

      /* Căn chỉnh "Remember me" và checkbox cùng "Forgot password?" trên cùng một dòng */
      .wrap .remember-forgot {
        display: flex;
        justify-content: space-between; /* Để chúng cách nhau */
        align-items: center;
        color: #fff;
        margin-top: 20px;
        flex-wrap: nowrap;  /* Đảm bảo chúng không bị xuống dòng */
      }

      /* Căn chỉnh checkbox và "Remember me" trên cùng một dòng */
      .wrap .remember {
        display: flex;  /* Dùng flexbox để checkbox và "Remember me" nằm cùng dòng */
        align-items: center;
      margin-top: 10px;
        margin-right: 10px; /* Thêm khoảng cách giữa checkbox và label */
      }

      .wrap .remember input {
        margin-right: 8px;  /* Khoảng cách giữa checkbox và label */
      }

      /* Căn chỉnh "Forgot password?" */
      .wrap .forget {
        text-decoration: none;
        color: rgb(132, 255, 255);
        margin-left: 10px;  /* Khoảng cách giữa "Remember me" và "Forgot password?" */
      }

      .wrap .forget:hover {
        color: #fff;
        text-decoration: underline;
      }

      .wrap .next {
        display: inline-block;
        color: #fff;
        text-decoration: none;
        margin-top: 20px;
        text-align: center;
      }

      .wrap .next:hover {
        text-decoration: underline;
        color: aqua;
      }
    </style>
</head>
<body>

    <div class="wrap">
        <h1>Login</h1>
        <form action="#" method="POST">
            <div class="user-box">
                <input type="text" name="username" required />
                <label for="username">Username</label>
            </div>

            <div class="user-box">
                <input type="password" name="password" required />
                <label for="password">Password</label>
            </div>

            <!-- Căn chỉnh "Remember me" và checkbox cùng "Forgot password" trên một dòng -->
            <div class="remember-forgot">
                <div class="remember">
                    <input type="checkbox" id="remember" name="remember" />
                    <label for="remember">Remember</label>
                </div>
                <a href="#" class="forget">Forgot password?</a>
            </div>

            <input type="submit" value="Login" class="login" />
        </form>

        <a href="project.html" class="next">Go Back</a>
    </div>

</body>
</html>
