@extends('master')


@section('content')

    <div class="row">
        <div class="col-md-12">
        @unless($categories)
            <h1>No Categories found.</h1>
            <hr>
        @else
            <h1>Categories</h1>
            <hr>
            @foreach($categories as $row)
                @unless($row['sub_category'])

                    <div class="col-md-4">
                        <div class="row">

                            <h2>{{ $row['title'] }}</h2>
                            <!-- <p><img src="{{ asset('images/' . $row['image']) }}" alt="" border="0" width="250"></p> -->
                            <p>{!! $row['article'] !!}</p>

                            @foreach($categories as $sub_row)
                                @if($sub_row['sub_category'] == $row['id'])
                                    <div class="container">
                                    <p><a href="{{ url('shop/' . $row['url']) . '/' . $sub_row['url'] }}">- {{ $sub_row['title'] }}</a></p>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>

                @endunless
            @endforeach
        @endunless
        </div>
    </div>

@endsection