@extends('master')

@section('slider')

    <div class="carousel slide" data-ride="carousel" id="featured">
        <div class="carousel-inner">
            <div class="item active"><img src="{{ asset('images/Cases-TLC-HeroShot01.jpg') }}" alt="First slide"></div>
            <div class="item "><img src="{{ asset('images/Cases-TLC-HeroShot02.jpg') }}" alt="Second slide"></div>
            <div class="item "><img src="{{ asset('images/Cases-TLC-HeroShot03.jpg') }}" alt="Third slide"></div>
        </div>{{-- carousel-inner --}}

        <a class="left carousel-control" href="#featured" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#featured" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- featured carousel -->

@section('content')



@endsection