@extends('master')


@section('content')

    <div class="row">

        @if($item)

            <div class="col-md-12">
                <div class="row">
                    <br>
                    <div class="col-md-4">

                        <?php

                        $img = $item['image'];

                        $img = explode(',',$item['image']);

                        ?>
                        <div style="height: 322px; width: 322px; border: 1px solid #EEEEEE;text-align: center">
                            <img style="max-height: 319px; max-width: 319px; padding: 10px;" src="{{ asset('/images/products/' . $item['url'] . '/' . $img[$item['primary_image']]) }}" alt="">
                        </div>
                        <div>
                        @foreach($img as $pic)
                            <div style="padding: 2px; margin:2px 0; margin-right: 2px; height: 79px; width: 79px; border: 1px solid #EEEEEE;text-align: center" class="pull-left">
                                <a href="{{ asset('/images/products/' . $item['url'] . '/' . $pic) }}" data-lightbox="roadtrip"><img
                                        src="{{ asset('/images/products/' . $item['url'] . '/' . $pic) }}" alt="" style="max-height: 70px; max-width: 70px;"></a>
                            </div>
                        @endforeach
                        </div>
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

                        <hr>
                        <h3>Product description</h3>
                        <p>{!! $item['article'] !!}</p>

                    </div>

                </div>
            </div>

        @else
            <p>No product details found...</p>
        @endif


    </div>

@endsection