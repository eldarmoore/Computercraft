@extends('master')


@section('content')

    {{--{{ dd($categories) }}--}}

    <div class="row">

        @if($category)

            <div class="col-md-12">

                <h1>{{ $category['title'] }}</h1>
                <p><img border="0" width="300" src="" alt=""></p>
                <p>{!! $category['article'] !!}</p>

            </div>

            @if($categories)
                @foreach($categories as $cat)
                    @if($category['id'] == $cat['sub_category'])
                        <div class="container">
                            <p><a href="{{ url('shop/' . $category['url']) . '/' . $cat['url'] }}">- {{ $cat['title'] }}</a></p>
                        </div>
                    @endif
                @endforeach

            @endif

        @else
            <p>No category details found...</p>
        @endif


    </div>

@endsection