@extends('master')


@section('content')

    @if(Session::get('user_id') == $user['id'])
    <div class="row">

        <div class="container" style="background-color: #EEEEEE;">

            @if($user)

                <div class="col-md-3">
                    <img style="background-color: #FFFFFF;" src="{{ asset('/images/default.png') }}" alt="">
                </div>

                <?php

                // $datetime is something like: 2014-01-31 13:05:59
                $datetimeFromMysql = $user['created_at'];
                $time = strtotime($datetimeFromMysql);
                $myFormatForView = date('d-m-Y', $time);
                // $myFormatForView is something like: 01/31/14 1:05 PM

                ?>

                <div class="col-md-9">
                    <h1>{{ $user['name'] }}</h1>
                    <p>Email: <span style="color: #2aabd2">{{ $user['email'] }}</span>, since: <span style="color: #2aabd2">{{ $myFormatForView }}</span> </p>
                    <p></p>
                </div>

            @endif
        </div>

    </div>
    @else

        <h1>Page not found.</h1>

    @endif

@endsection