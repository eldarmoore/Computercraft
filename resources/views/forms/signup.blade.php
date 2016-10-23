@extends('master')


@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Sign up page</h1>
            <p>Here you can sign up for new account.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5">
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" value="{{ Illuminate\Support\Facades\Input::old('name') }}">
                </div>
                {{ csrf_field() }} {{-- Token --}}
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" value="{{ Illuminate\Support\Facades\Input::old('email') }}">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password:</label>
                    <input type="password" class="form-control" name="password_confirmation">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Sign up</button>
                <a href="{{ url('user/signin') }}">Or signin with your account?</a>
            </form>
        </div>
    </div>

@endsection