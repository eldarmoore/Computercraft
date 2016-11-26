<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <script> var BASE_URL = "{{ url('') }}/";</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lightbox.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/prefixfree.min.css') }}"></script>
</head>
<body>
    <div class="container">
        @if($errors->any()) @include('includes.errors') @endif
        @if( Session::has('sm')) @include('includes.sm') @endif
        <form class="form-signin" method="post">
            <a class="navbar-brand" href="{{ url('') }}"><img src="{{ asset('images/logo.svg') }}" alt="" height="20"></a>
            {{ csrf_field() }} {{-- Token --}}
            <label for="email" class="sr-only">Email address</label>
            <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus value="{{ Illuminate\Support\Facades\Input::old('email') }}">
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <a href="#">Forgot your password?</a>
            <button class="btn btn-lg btn-primary btn-block primary-color" type="submit">Sign in</button>
            <hr>
            <a href="{{ url('user/signup') }}" type="submit" name="submit" class="btn btn-lg btn-default btn-block default-color">Create Account</a>
        </form>
    </div> <!-- /container -->

    <script type="text/javascript" src="{{ asset('lib/jquery/jquery-1.11.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/lightbox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>
</html>