@extends('master')

@section('slider')

    <div class="carousel slide carousel-example-generic" data-ride="carousel" id="featured">
        <div class="carousel-inner">

            @if($carousel)

                <?php $active = 'active'; ?>

                @foreach($carousel as $slider)

                    <div  class="item {{ $active }}"><img style="width: 100%"src="{{ asset('images/carousel/' . $slider->image) }}" alt="">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1 style="padding: 15px">{!! $slider->title !!}</h1>
                                <p>{!! $slider->article !!}</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button" style="padding: 15px;">

                                @if($slider->button)

                                    {{ $slider->button }}

                                @endif

                                </a></p>
                            </div>
                        </div>
                    </div>

                    <?php $active = ''; ?>

                @endforeach

            @endif

            {{--<div class="item active"><video controls muted autoplay="" loop="" preload="" poster="http://cwsmgmt.corsair.com/responsive/img/cue_fallback.jpg" id="videoHero" style="top: 70px; height: auto; width: 100%;" src="{{ asset('videos/crystal_hero2.mp4') }}"></video></div>--}}
            {{--<div class="item "><video autoplay="" loop="" preload="" poster="http://cwsmgmt.corsair.com/responsive/img/cue_fallback.jpg" id="videoHero" style="top: 70px; height: auto; width: 100%;" src="{{ asset('videos/fans_hero3.mp4') }}"></video></div>--}}
            {{--<div class="item "><video autoplay="" loop="" preload="" poster="http://cwsmgmt.corsair.com/responsive/img/cue_fallback.jpg" id="videoHero" style="top: 70px; height: auto; width: 100%;" src="{{ asset('videos/VENGENCE_LED_5MB.mp4') }}"></video></div>--}}
            {{--<div class="item "><video autoplay="" loop="" preload="" poster="http://cwsmgmt.corsair.com/responsive/img/cue_fallback.jpg" id="videoHero" style="top: 70px; height: auto; width: 100%;" src="{{ asset('videos/RGBFAN.mp4') }}"></video></div>--}}
        </div>{{-- carousel-inner --}}

        <a class="left carousel-control" href="#featured" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#featured" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- featured carousel -->

@section('content')

    <h3 class="text-center">New products</h3>
    <hr>
    <div class="row">
    @if($new_products)

        @foreach($new_products as $row)

            @foreach($categories as $sub_cat)

                @if($sub_cat['id'] == $row['categorie_id'])

                    @foreach($categories as $cat)

                        @if($sub_cat['sub_category'] == $cat['id'])

                            <div class="col-sm-3 col-lg-2 col-md-2">
                                <div class="thumbnail product">
                                    <?php $image = explode(',', $row['image']); ?>
                                    <div class="img-container">
                                        <a href="{{ url('shop/' . $cat['url'] . '/' . $sub_cat['url'] . '/' . $row['url']) }}"><img src="{{ asset('/images/products/' . $row['url'] . '/' . $row['primary_image']) }}" alt=""></a>
                                    </div>
                                    <div class="caption">

                                        @if(strlen($row['title']) > 10)
                                            <h4 class="title-limit"><a href="{{ url('shop/' . $cat['url'] . '/' . $sub_cat['url'] . '/' . $row['url']) }}">{{ \Illuminate\Support\Str::words($row['title'], 5, "...") }}</a></h4>
                                        @endif

                                        {{--@if(strlen($row['article']) > 10)--}}
                                        {{--<p class="text-limit">{{ \Illuminate\Support\Str::words($row['article'], 10, "...")  }}</p>--}}
                                        {{--                                                <p class="text-limit">{{ substr($row['article'], 0, 125) . '...' }}</p>--}}
                                        {{--@endif--}}

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

    @endif
    </div>
@endsection