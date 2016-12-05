@extends('master')


@section('content')

    <div class="container">
        <form class="form-signin" method="post" style="width: 400px; margin: 0 auto;">
            {{ csrf_field() }} {{-- Token --}}
            <div class="form-group">
                <label for="email" >Email address</label>
                <input type="text" name="email" id="inputEmail" class="form-control" placeholder=" enter your email" required autofocus value="{{ Illuminate\Support\Facades\Input::old('email') }}">
            </div>
            <div class="form-group">
                <label for="password" >Password</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder=" enter your password" required>
            </div>
            <div class="form-group">
                <a href="#">Forgot your password?</a>
                <button class="btn btn-lg btn-primary btn-block primary-color" type="submit">Sign in</button>
                <hr>
                <a href="{{ url('user/signup') }}" type="submit" name="submit" class="btn btn-lg btn-default btn-block default-color">Create Account</a>
            </div>
        </form>
    </div> <!-- /container -->

@endsection