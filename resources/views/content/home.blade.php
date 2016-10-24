@extends('master')

@section('slider')

    <!-- Carousel
    ================================================== -->

    <div class="carousel slide" data-ride="carousel">
        <!-- Indicators -->

        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{ asset('images/Cases-TLC-HeroShot01.jpg') }}" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Slide One</h1>
                        <p>“The Corsair Carbide Series Air 240 is just a great case all the way around.”</p>
                        <p><a class="btn-cc" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('images/Cases-TLC-HeroShot02.jpg') }}" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Slide Two</h1>
                        <p>“…so get the Corsair Graphite Series 780T full tower case for your desktop and let it amaze your friends.”</p>
                        <p><a class="btn-cc" href="#" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('images/Cases-TLC-HeroShot03.jpg') }}" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Slide Three</h1>
                        <p>“[The Carbide Series 330R Titanium Edition] is silent and non-invasive and will fit in any room in the house…”</p>
                        <p><a class="btn-cc" href="#" role="button">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        </a>
    </div><!-- /.carousel -->


@section('content')



@endsection