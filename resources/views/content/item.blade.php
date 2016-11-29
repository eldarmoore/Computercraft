@extends('master')


@section('content')

    <div class="row">

        @if($item)

            <div class="col-md-12">
                <h2>{{ $item['title'] }}</h2>

                <div class="row">
                    <br>
                    <div class="col-md-4">

                        <?php

                        $img = $item['image'];

                        $img = array_filter( explode(",", $item['image'] ));

                        ?>
                        <div style=" border: 1px solid #EEEEEE;text-align: center">
                            <img style="max-height: 319px; max-width: 319px; padding: 10px;" src="{{ asset('/images/products/' . $item['url'] . '/' . $item['primary_image']) }}" alt="">
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

                        <div style="background-color: #e0e0e0; padding: 20px 10px; width: 100%;" class="pull-left">

                            <p><span class="price-tag-item">Price: <b>{{ $item['price'] }}$</b></span></p>

                            @if($item['quantity'])
                                <div style="background-color: #FFFFFF; padding: 4px; width: 150px;">
                                    <h4><span style="color: #2ca02c;" class="glyphicon glyphicon-ok-circle"></span> In Stock!</h4>
                                </div>
                            @else
                                <div style="background-color: #FFFFFF; padding: 4px; width: 150px;">
                                    <h4><span style="color: #a94442;" class="glyphicon glyphicon-remove-circle"></span> Out of Stock!</h4>
                                </div>
                            @endif

                            <br>

                            <p>
                                <button @if(Cart::get($item['id']) || $item['quantity'] == 0) disabled="disabled" @endif data-id="{{ $item['id'] }}" type="button" class="btn add-to-cart-btn w200"><span class="glyphicon glyphicon-shopping-cart pull-left"></span>Add To Cart</button>
                                {{--<a href="{{ url('shop/checkout') }}" class="btn add-to-cart-btn "></span>Checkout</a>--}}
                            </p>

                        </div>

                        <div class="pull-left">
                        <hr>
                        <h3>Product description</h3>
                        <p>{!! $item['article'] !!}</p>
                        </div>
                    </div>
                </div>
            </div>

        @else
            <p>No product details found...</p>
        @endif


    </div>

@endsection