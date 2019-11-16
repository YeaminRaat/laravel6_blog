<!DOCTYPE html>
<html lang="en">

<head>

    <title>Admin Login</title>
    @include('admin.inc.style')

</head>

<body class="login-body">

<div class="container">

    <form class="form-signin" method="POST" action="{{ route('login') }}">
        @csrf
        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">
            <label for="email">Email:</label>
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <label for="password">{{ __('Password:') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <label class="checkbox">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me ') }}
                <span class="pull-right">
                    @if (Route::has('password.request'))
                        <a data-toggle="modal" href="{{ route('password.request') }}"> {{ __('Forgot Your Password?') }}</a>
                    @endif
                </span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">{{ __('Login') }}</button>
            <p>or you can sign in via social network</p>

        </div>

    </form>

</div>



<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ asset('public/admin/js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>


</body>

</html>
