@extends('master')


@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Sign in page</h1>
            <p>Here you can sign in with your account -</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5">
            <form action="" method="post">
                {{ csrf_field() }} {{-- Token --}}
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" value="{{ Illuminate\Support\Facades\Input::old('email') }}">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
                <a href="#">Forgot your password?</a>
            </form>
        </div>
    </div>

@endsection