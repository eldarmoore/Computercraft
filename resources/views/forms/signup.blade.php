@extends('master')

@section('slider')

    <div></div>

@section('content')

    <div>
        <form action="" method="post" class="form-signin">

            <div class="row">

                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" value="{{ Illuminate\Support\Facades\Input::old('name') }}" placeholder="enter your name" required autofocus>
                        </div>
                        {{ csrf_field() }} {{-- Token --}}
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" name="email" value="{{ Illuminate\Support\Facades\Input::old('email') }}" placeholder="enter your email address" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" name="password" placeholder="enter your password" required>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password:</label>
                            <input type="password" class="form-control" name="password_confirmation" placeholder="confirm your Password" required>
                        </div>
                    </div>

                    <div class="col-md-4 col-md-offset-4">
                        <a href="{{ url('user/signin') }}">Or signin with your account?</a>
                        <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block primary-color">Sign up</button>
                    </div>
                </div>
            </div>

        </form>
    </div>

@endsection