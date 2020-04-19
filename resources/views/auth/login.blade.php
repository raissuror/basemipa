<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login {{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('atlantis/img/icon.ico') }}" type="image/x-icon"/>

    <!-- Fonts and icons -->
    <script src="{{ asset('atlantis/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ asset('atlantis/css/fonts.min.css') }}']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('atlantis/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('atlantis/css/atlantis.css') }}">
</head>
<body class="login">
    <div class="wrapper wrapper-login wrapper-login-full p-0">
        <div class="login-aside w-50 d-flex flex-column align-items-center justify-content-center text-center bg-secondary-gradient">

            <div class="title fw-bold text-white mb-3">
                <img src="{{ asset('images/enviro-logo-white.png') }}" alt="">
            </div>

        </div>
        <div class="login-aside w-50 d-flex align-items-center justify-content-center bg-white">
            <div class="container container-login container-transparent animated fadeIn">
                <h3 class="text-center">Login</h3>

                <form action="{{ route('login') }}" method="post" autocomplete="off">

@csrf

<div class="login-form">
    <div class="form-group">
        <label for="username" class="placeholder"><b>Username</b></label>
        <input class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="{{ __('username') }}" type="text" name="username" value="{{ old('username') }}" value="admin@argon.com" required autofocus>
        @if ($errors->has('username'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('username') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group">
        <label for="password" class="placeholder"><b>Password</b></label>
        <a href="{{ route('password.request') }}" class="link float-right">Lupa Password ?</a>
        <div class="position-relative">
        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" type="password" value="secret" required>
            <div class="show-password">
                <i class="icon-eye"></i>
            </div>
        </div>
    </div>
    <div class="form-group form-action-d-flex mb-3">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="remember" id="rememberme">
            <label class="custom-control-label m-0" for="rememberme">Remember Me</label>
        </div>
        <button class="btn btn-secondary col-md-5 float-right mt-3 mt-sm-0 fw-bold">Log In</button>
    </div>
    <div class="login-account">
        <span class="msg">Belum punya akun?</span>
        <a href="{{ url('/register') }}" id="show-signup" class="link">Sign Up</a>
    </div>
</div>

</form>

            </div>
        </div>
    </div>
    <script src="{{ asset('atlantis/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('atlantis/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('atlantis/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('atlantis/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('atlantis/js/atlantis.min.js') }}"></script>
</body>
</html>

