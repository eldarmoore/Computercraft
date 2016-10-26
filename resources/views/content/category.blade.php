@extends('master')


@section('content')

    <div class="row">

        @if($category)

            <div class="col-md-12">

                <h1>{{ $category['title'] }}</h1>
                <p><img border="0" width="300" src="" alt=""></p>
                <p>{!! $category['article'] !!}</p>

            </div>

        @else
            <p>No category details found...</p>
        @endif


    </div>

@endsection