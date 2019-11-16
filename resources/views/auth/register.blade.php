<!DOCTYPE html>
<html lang="en">

<head>

    <title>Admin Registration</title>
    @include('admin.inc.style')

</head>

<body class="login-body">

<div class="container">

    <form class="form-signin" method="POST" action="{{ route('register') }}">
        @csrf
        <h2 class="form-signin-heading">registration now</h2>
        <div class="login-wrap">
            <p>Enter your personal details below</p>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required placeholder="Full Name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" required placeholder="Username">
                @error('username')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input type="password" class="form-control" name="password" required placeholder="Password">
                @error('name')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input type="password" class="form-control" name="password_confirmation" required placeholder="Re-type Password">

            <button class="btn btn-lg btn-login btn-block" type="submit">Registration</button>


        </div>

    </form>

</div>

</body>

</html>
