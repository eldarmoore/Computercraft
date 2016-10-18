@extends('master')


@section('content')

    <div class="row">

        @if($item)

            <div class="col-md-12">

                <h1>{{ $item['title'] }}</h1>
                <p><img border="0" width="300" src="{{ asset('/images/' . $item['manufacturer'] . '/' . $item['url'] . '/' . $item['image']) }}" alt=""></p>
                <p>{!! $item['article'] !!}</p>
                <p><b>Price: </b>{{ $item['price'] }}$</p>
                <p>
                    <input type="button" class="add-to-cart-btn btn btn-success" value="+ Add To Cart">
                    <a href="{{ url('shop/checkout') }}" class="btn btn-primary">Checkout</a>
                </p>

            </div>

        @else
            <p>No product details found...</p>
        @endif


    </div>

@endsection