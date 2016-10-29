@extends('master')

@section('content')

    @if(isset($cat_title))
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $cat_title }}</h1>
            </div>
        </div>
    @endif
    <div class="row">

        <br>

        @if($products)

            @foreach($products as $row)

                @foreach($categories as $sub_cat)

                    @if($sub_cat['id'] == $row['categorie_id'])

                        @foreach($categories as $cat)

                            @if($sub_cat['sub_category'] == $cat['id'])

                                <div class="col-sm-2 col-lg-2 col-md-2">
                                    <div class="thumbnail product">
                                        <img src="{{ asset('/images/products/' . $row['image']) }}" alt="">
                                        <div class="caption">

                                            @if(strlen($row['title']) > 10)
                                                <h6 class="title-limit"><a href="{{ url('shop/' . $cat['url'] . '/' . $sub_cat['url'] . '/' . $row['url']) }}">{{ \Illuminate\Support\Str::words($row['title'], 6, "...") }}</a></h6>
                                            @endif

                                            {{--@if(strlen($row['article']) > 10)--}}
                                                {{--<p class="text-limit">{!! \Illuminate\Support\Str::words($row['article'], 10, "...")  !!}</p>--}}
                                                {{--<p class="text-limit">{{ substr($row['article'], 0, 125) . '...' }}</p>--}}
                                            {{--@endif--}}

                                            <p class="pull-right">6 reviews</p>
                                            <p>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star-empty"></span>
                                                <span class="glyphicon glyphicon-star-empty"></span>
                                            </p>

                                            <hr class="no-margin">

                                            <h4 class="text-center price-tag">{{ $row['price'] }}$</h4>

                                                <button @if(Cart::get($row['id'])) disabled="disabled" @endif data-id="{{ $row['id'] }}" type="button" class="add-to-cart-btn btn bg-success w151" value=""><span class="glyphicon glyphicon-shopping-cart pull-left"></span>Add To Cart</button>

                                        </div>
                                    </div>
                                </div>

                            @endif

                        @endforeach

                    @endif

                @endforeach

            @endforeach

        @else
            <div class="col-md-12">
            <p><i>No products to display...</i></p>
            </div>
        @endif

    </div>

@endsection