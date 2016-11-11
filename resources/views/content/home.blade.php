@extends('master')

@section('slider')

    <div class="carousel slide" data-ride="carousel" id="featured">
        <div class="carousel-inner">
            <div class="item active"><video autoplay="" loop="" preload="" poster="http://cwsmgmt.corsair.com/responsive/img/cue_fallback.jpg" id="videoHero" style="top: 70px; height: auto; width: 100%;" src="{{ asset('videos/crystal_hero2.mp4') }}"></video></div>
            <div class="item "><video autoplay="" loop="" preload="" poster="http://cwsmgmt.corsair.com/responsive/img/cue_fallback.jpg" id="videoHero" style="top: 70px; height: auto; width: 100%;" src="{{ asset('videos/fans_hero3.mp4') }}"></video></div>
            <div class="item "><video autoplay="" loop="" preload="" poster="http://cwsmgmt.corsair.com/responsive/img/cue_fallback.jpg" id="videoHero" style="top: 70px; height: auto; width: 100%;" src="{{ asset('videos/VENGENCE_LED_5MB.mp4') }}"></video></div>
            <div class="item "><video autoplay="" loop="" preload="" poster="http://cwsmgmt.corsair.com/responsive/img/cue_fallback.jpg" id="videoHero" style="top: 70px; height: auto; width: 100%;" src="{{ asset('videos/RGBFAN.mp4') }}"></video></div>
        </div>{{-- carousel-inner --}}

        <a class="left carousel-control" href="#featured" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#featured" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- featured carousel -->

@section('content')



@endsection