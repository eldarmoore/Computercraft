@extends('master')

@section('slider')

@section('content')

    @if($contents)

        @foreach($contents as $row)
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ $row['title'] }}</h1>
                    <p>{!! $row['article'] !!}</p>
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