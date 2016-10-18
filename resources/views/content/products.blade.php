@extends('master')


@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>{{ $cat_title }}</h1>
        </div>
    </div>

    <div class="row">

        @if($products)

            @foreach($products as $row)
                <div class="col-md-4">

                    @if(strlen($row['title']) > 20)

                    <h2>{{ $row['title'] }}</h2>
                    @endif
                    <p><img border="0" width="300" src="{{ asset('/images/' . $row['url'] . '/' . $row['image']) }}" alt=""></p>
                    <p>{!! $row['article'] !!}</p>
                    <p><b>Price on site: </b>{{ $row['price'] }}$</p>
                </div>
            @endforeach

        @else
            <div class="col-md-12">
            <p><i>No products found...</i></p>
            </div>
        @endif


    </div>

@endsection