@extends('master')

@section('slider')

    <div>
    </div>

@section('content')

    @if($contents)

        @foreach($contents as $row)
            <div class="row" id="{{ $row['title'] }}">
                <div class="col-md-12">
                    <h1>{{ $row['title'] }}</h1>
                    <p>{!! $row['article'] !!}</p> <!-- Unfiltered data pull from CMS -->
                </div>
            </div>
        @endforeach

    @else

        <div class="row">
            <div class="col-md-12">
                <p><i>No content to display.</i></p>
            </div>
        </div>

    @endif
@endsection