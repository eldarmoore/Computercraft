@extends('master')


@section('content')

    <div class="row">

        @if($item)

            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-4">
                        <img width="400" src="{{ asset('/images/products/' . $item['image']) }}" alt="">
                    </div>

                    <div class="col-md-8">
                        <h2>{{ $item['title'] }}</h2>
                        <hr>
                        <br>
                        <br>
                        <br>
                        <p><span class="price-tag-item">Price: {{ $item['price'] }}$</span></p>

                        <p>
                            <button @if(Cart::get($item['id'])) disabled="disabled" @endif data-id="{{ $item['id'] }}" type="button" class="btn add-to-cart-btn w200"><span class="glyphicon glyphicon-shopping-cart pull-left"></span>Add To Cart</button>
                            {{--<a href="{{ url('shop/checkout') }}" class="btn add-to-cart-btn "></span>Checkout</a>--}}
                        </p>

                    </div>

                </div>
            </div>
            <div class="col-md-12">
                <hr>
                <h3>Product description</h3>
                <p>{!! $item['article'] !!}</p>
            </div>



        @else
            <p>No product details found...</p>
        @endif


    </div>

@endsection