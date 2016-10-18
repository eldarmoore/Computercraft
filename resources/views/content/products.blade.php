@extends('master')


@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>{{ $cat_title }}</h1>
        </div>
    </div>

    <div class="row">

        @if($products)

            @foreach($products as $row)

                <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="thumbnail">
                        <img src="{{ asset('/images/' . $row['url'] . '/' . $row['image']) }}" alt=""">
                        <div class="caption">


                            @if(strlen($row['title']) > 10)

                            <h4><a href="#">{{ substr($row['title'], 0, 45) . '...' }}</a></h4>

                            @endif



                            @if(strlen($row['article']) > 10)

                                <p>{{ substr($row['article'], 0, 100) . '...' }}</p>

                            @endif



                            <p class="pull-right">6 reviews</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </p>

                            <h4 class="pull-right">Price: <b>{{ $row['price'] }}$</b></h4>

                            <span class="clearfix"></span>
                        </div>
                    </div>
                </div>

            @endforeach

        @else
            <div class="col-md-12">
            <p><i>No products to display...</i></p>
            </div>
        @endif


    </div>

@endsection