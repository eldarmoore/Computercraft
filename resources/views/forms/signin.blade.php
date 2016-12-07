@extends('master')

@section('slider')

    <div></div>

@section('content')

    <?php

    require base_path('vendor/autoload.php');

    $fb = new Facebook\Facebook([
            'app_id' => '210744862696224',
            'app_secret' => '22738f1c32d766a615e91315a076e1b3',
            'default_graph_version' => 'v2.5',
    ]);

    $helper = $fb->getRedirectLoginHelper();
    $permissions = ['email'];
    $link = 'http://localhost:8000/fb-callback.php';
    $loginUrl = $helper->getLoginUrl($link, $permissions);

    ?>

    <div class="container">
        <form class="form-signin" method="post" style="width: 400px; margin: 0 auto;">
            {{ csrf_field() }} {{-- Token --}}
            <div class="form-group">
                <label for="email" >Email address</label>
                <input type="text" name="email" id="inputEmail" class="form-control" placeholder="enter your email" required autofocus value="{{ Illuminate\Support\Facades\Input::old('email') }}">
            </div>
            <div class="form-group">
                <label for="password" >Password</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="enter your password" required>
            </div>
            <div class="form-group">
                <a href="#">Forgot your password?</a>
                <button class="btn btn-lg btn-primary btn-block primary-color" type="submit">Sign in</button>
                <hr>
                <a href="{{ url('user/signup') }}" type="submit" name="submit" class="btn btn-lg btn-default btn-block default-color">Create Account</a>
            </div>
            <a href="<?= htmlspecialchars($loginUrl); ?>">Log in with Facebook!</a>
        </form>
    </div> <!-- /container -->

@endsection