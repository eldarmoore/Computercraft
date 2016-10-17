@extends('master')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Categories</h1>
                <hr>
            </div>
        </div>

        <div class="row">
            @foreach($categories as $row)
                @unless($row['sub_category'])
                    <div class="col-md-4">

                        <h2>{{ $row['title'] }}</h2>
                        <!-- <p><img src="{{ asset('images/' . $row['image']) }}" alt="" border="0" width="250"></p> -->
                        <p>{!! $row['article'] !!}</p>

                        @foreach($categories as $sub_row)
                            @if($sub_row['sub_category'] == $row['id'])
                                <p><a href="{{ url('shop/' . $row['url']) . '/' . $sub_row['url'] }}">- {{ $sub_row['title'] }}</a></p>
                            @endif
                        @endforeach

                    </div>
                @endunless
            @endforeach
        </div>
    </div>
@endsection