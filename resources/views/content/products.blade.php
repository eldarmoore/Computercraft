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

                @foreach($categories as $sub_cat)

                    @if($sub_cat['id'] == $row['categorie_id'])

                        @foreach($categories as $cat)

                            @if($sub_cat['sub_category'] == $cat['id'])

                                <div class="col-sm-3 col-lg-3 col-md-3">
                                    <div class="thumbnail">
                                        <img src="{{ asset('/images/' . $row['manufacturer'] . '/' . $row['url'] . '/' . $row['image']) }}" alt="">
                                        <div class="caption">


                                            @if(strlen($row['title']) > 10)

                                            <h4><a href="{{ url('shop/' . $cat['url'] . '/' . $sub_cat['url'] . '/' . $row['url']) }}">{{ substr($row['title'], 0, 40) . '...' }}</a></h4>

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

                                                <hr>

                                            <h4 class="text-center"><b>{{ $row['price'] }}$</b></h4>


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