@extends('master')


@section('content')

    <div class="row">

        @if($item)

            <div class="col-md-12">
                <br>
                <h1>{{ $item['title'] }}</h1>
                <br>
                <br>
                <div class="row">

                    <div class="col-md-4">
                        <img width="300" src="{{ asset('/images/products/' . $item['image']) }}" alt="">
                    </div>

                    <div class="col-md-8">


                        <p></p>

                        <p><h4>Price: </h4><span class="price-tag-item">{{ $item['price'] }}$</span></p>

                        <p>
                            <input @if(Cart::get($item['id'])) disabled="disabled" @endif data-id="{{ $item['id'] }}" type="button" class="btn add-to-cart-btn" value="+ Add To Cart">
                            <a href="{{ url('shop/checkout') }}" class="btn add-to-cart-btn "></span>Checkout</a>
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