@include('layouts.header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('remixicon/remixicon.css') }}">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #eeeeee;
    }

    nav {
        background-color: #dc3545;
        width: 100%;
        padding: 8px 30px 8px 30px;
        display: flex;
        justify-content: space-between;
        display: none;
    }

    nav .button {
        display: flex;
        align-items: center;
        color: #fff;
        font-weight: 400;
        cursor: pointer;
    }

    .login-form {
        display: flex;
        justify-content: center;
    }

    .login-bar {
        background-color: #fff;
        width: 320px;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 50px 0;
        margin-top: 20px;
        border-radius: 5px;
    }

    .login-bar h5 {
        font-size: 24px;
        margin: 25px 0;
    }

    .login-bar form {
        width: 90%;
    }

    .login-bar form .form-control {
        display: flex;
        align-items: center;
    }

    .login-bar form .form-group {
        margin-bottom: 15px;
    }

    .login-bar form .email input,
    .login-bar form .password input {
        border-radius: 3px;
        width: 100%;
        padding: 5px;
        border: 0;
        outline: none;
    }

    .login-bar form .remember {
        display: flex;
        align-items: center;
        margin: 12px 0;
    }

    .login-bar form .remember input {
        margin-right: 5px;
    }

    .login-bar form .remember p {
        margin: 0
    }

    .login-bar form .button input {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 3px;
        background-color: #28a745;
        color: #fff;
        cursor: pointer;
    }

    .login-bar form .alert {
        text-transform: capitalize;
        padding: 7px 5px;
        margin: 0;
        list-style: none;
    }

    .login-bar .titel {
        margin: 25px 0 0 0;
    }

    .login-bar .titel p {
        margin: 0;
        font-size: 11px;
        text-transform: uppercase;
        font-weight: 500;
    }

    .login-bar .login-with {
        margin: 10px 0;
        display: flex;
        width: 100%;
        padding: 10px 12px;
    }

    .login-bar .login-with .google {
        flex: 1;
        border: 1px solid #dee2e6;
        border-radius: 3px;
        margin: 0 3px;
        padding: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .login-bar .login-with .google a {
        display: flex;
        text-decoration: none;
        color: #333;
    }

    .login-bar .login-with .google i {
        color: coral;
    }

    .login-bar .login-with .google a p {
        margin: 0;
    }

    .login-bar .signup-link {
        margin-bottom: 10px;
        margin-top: 0;
        text-align: center;
    }

    .login-bar .signup-link a {
        color: #333;
        text-decoration: none;
    }

    @media (max-width: 640px) {
        nav {
            display: inline-flex;
            padding: 5px 10px;
        }

        .login-bar {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .login-bar h5 {
            margin: 15px 0;
        }

        .login-bar .titel {
            margin: 15px 0 0 0;
        }

        .login-bar .signup-link {
            margin: 10px 0 15px 0;
        }
    }
</style>

<body>
    <nav>
        <div class="button">
            <i class="ri-arrow-left-s-line" onclick="history.back()" id="back-buttton" style="font-size: 32px;"></i>
            <p style="margin:0;">Login</p>
        </div>
        <div class="button">
            <i class="ri-more-2-fill" style="font-size: 24px;"></i>
        </div>
    </nav>
    <div class="login-form">
        <div class="login-bar">
            <h5>LOGIN</h5>
            <form action="{{ route('login.store') }}" method="POST">
                @csrf
                @if (session()->has('error'))
                    <div class="alert text-danger">
                        <li>{{ session()->get('error') }}</li>
                    </div>
                @endif
                <div class="form-group">
                    <div class="email form-control">
                        <i class="ri-mail-line"></i>
                        <input type="text" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="password form-control">
                        <i class="ri-lock-line"></i>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="remember">
                    <input type="checkbox">
                    <p>Remember me</p>
                </div>
                <div class="button">
                    <input type="submit" value="LOGIN" class="btn btn-success" required>
                </div>
            </form>
            <div class="titel">
                <p>Or Singup Using</p>
            </div>
            <div class="login-with">
                <div class="google">
                    <a href="">
                        <i class="ri-google-fill"></i>
                        <p>oogle</p>
                    </a>
                </div>
            </div>
            <div class="signup-link">
                <a href="{{ route('register') }}">Sing up now</a>
            </div>
        </div>
    </div>
</body>

</html>
@include('layouts.footer')
